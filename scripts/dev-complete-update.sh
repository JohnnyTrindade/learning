#!/bin/bash

cd $HOME
rm -rf $HOME/downloads
mkdir $HOME/downloads

filename_db=$(aws s3 ls s3://ihnsgroup-magento/db/ | awk '{$1=$2=$3=""; print $0}' | sed 's/^[ \t]*//' | sort -n -t "-" -k 1 | tail -n 1)
filename_media=$(aws s3 ls s3://ihnsgroup-magento/media/ | awk '{$1=$2=$3=""; print $0}' | sed 's/^[ \t]*//' | sort -n -t "-" -k 1 | tail -n 1)

echo "Downloading files"

aws s3 cp s3://ihnsgroup-magento/db/$filename_db $HOME/downloads
aws s3 cp s3://ihnsgroup-magento/media/$filename_media $HOME/downloads

echo "Unzipping media and database"

tar -xzf downloads/$filename_media -C $HOME/downloads
gunzip -c downloads/$filename_db > $HOME/downloads/db.sql

echo "Removing old database"
sudo mysql -uroot -pmagento2 -e "drop database magento2";

echo "Recreating database"
sudo mysql -uroot -pmagento2 -e "create database magento2";

echo "Removing old media "
rm -rf ~/public_html/pub/media

echo "Importing media and database"

mv ~/downloads/media ~/public_html/pub/media
sudo mysql -uroot -pmagento2 magento2 < ~/downloads/db.sql

echo "Updating database"

sudo mysql -uroot -pmagento2 -e "use magento2; update core_config_data set value = 'https://dev.anhosefittings.com/' where value='https://www.anhosefittings.com/'";
sudo mysql -uroot -pmagento2 -e "use magento2; update core_config_data set value = 'http://dev.anhosefittings.com/' where value='http://www.anhosefittings.com/'";
sudo mysql -uroot -pmagento2 -e "use magento2; update core_config_data set value = 'https://dev.improvedracing.com/' where value='https://new.improvedracing.com/'";
sudo mysql -uroot -pmagento2 -e "use magento2; update core_config_data set value = 'http://dev.improvedracing.com/' where value='http://new.improvedracing.com/'";


cd $HOME

echo Starting update from repository


echo Pulling latest commit
cd $HOME/magento-stores || exit
git pull
# Add a git commit hash check ./deploy commit hash
# TODO: update log
# Add elapsed time
start=$(date +'%s')


echo Backing up current code and design folders
cd $HOME/public_html/app || exit
mv code   code-"$(date +%h%d)"
mv design design-"$(date +%h%d)"

echo Copying latest code and design folders
cp -r $HOME/magento-stores/magento/app/code   $HOME/public_html/app/
cp -r $HOME/magento-stores/magento/app/design $HOME/public_html/app/

echo Finished moving new code. Waiting 5 sec
sleep 5

cd $HOME/public_html/ || exit

echo Waiting 10 seconds before running setup commands
sleep 10

cd $HOME/public_html/ || exit
echo "Now run the following commands"
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy

end=$(date +'%s')

bin/magento mi:s:m --reset
bin/magento mi:s:m --restart
bin/magento mi:s:r
bin/magento ind:rei
bin/magento ca:fl
bin/magento ca:cl

cd $HOME/public_html/ || exit
rm -rf var/{cache,di,page_cache,view_preprocessed} generated/* pub/static/*
bin/magento mi:s:m --reset && bin/magento mi:s:m --restart && bin/magento mi:s:r && bin/magento ind:rei && bin/magento ca:en && bin/magento ca:fl && bin/magento ca:cl

sudo chmod 777 -R $home/public_html

echo "Elapsed time was $(( $end - $start)) seconds"
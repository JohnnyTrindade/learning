#!/bin/sh

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
sudo mysql -uroot -pmagento2 -e "drop database staging";

echo "Recreating database"
sudo mysql -uroot -pmagento2 -e "create database staging";

echo "Removing old media "
rm -rf ~/public_html/pub/media

echo "Importing media and database"

mv ~/downloads/media ~/public_html/pub/media
sudo mysql -uroot -pmagento2 staging < ~/downloads/db.sql

echo "Updating database"

sudo mysql -uroot -pmagento2 -e "use staging; update core_config_data set value = 'https://staging.anhosefittings.com/' where value='https://www.anhosefittings.com/'";
sudo mysql -uroot -pmagento2 -e "use staging; update core_config_data set value = 'http://staging.anhosefittings.com/' where value='http://www.anhosefittings.com/'";
sudo mysql -uroot -pmagento2 -e "use staging; update core_config_data set value = 'https://staging.improvedracing.com/' where value='https://new.improvedracing.com/'";
sudo mysql -uroot -pmagento2 -e "use staging; update core_config_data set value = 'http://staging.improvedracing.com/' where value='http://new.improvedracing.com/'";

cd $HOME/public_html
rm -rf var/{cache,di,page_cache,view_preprocessed} generated/* pub/static/*
bin/magento mi:s:m --reset && bin/magento mi:s:m --restart && bin/magento mi:s:r && bin/magento ind:rei && bin/magento ca:en && bin/magento ca:fl && bin/magento ca:cl

sudo chmod 777 -R $HOME/public_html

echo "Finished"
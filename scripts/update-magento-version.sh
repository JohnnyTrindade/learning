#!/usr/bin/env sh

# shellcheck disable=SC2164

echo "Starting Magento version update"

cd $HOME/public_html_staging/

rm backup_composer.json

cp composer.json backup_composer.json

#bin/magento maintenance:enable

composer require magento/composer-root-update-plugin=~1.0 --no-update

composer update

composer remove magento/product-community-edition --no-update

composer require magento/product-community-edition=2.4.1 --no-update

composer update

rm -rf var/cache/*

rm -rf var/page_cache/*

rm -rf generated/code/*

bin/magento setup:upgrade

bin/magento setup:di:compile

bin/magento setup:static-content:deploy -f

#bin/magento maintenance:disable

bin/magento cache:clean

bin/magento cache:flush

bin/magento cache:status

echo "Magento version update finnished"
#!/usr/bin/env sh

# shellcheck disable=SC2164

cd $HOME

rm -rf public_html_staging/app/code/Mirasvit

cp -r Mirasvit public_html_staging/app/code

cd $HOME/public_html_staging

bin/magento setup:upgrade

bin/magento setup:di:compile

composer require authorizenet/magento-module-authorizenet ^1.0.0

composer require laminas/laminas-eventmanager

composer require laminas/laminas-code

composer require authorizenet/magento-module-webhooks 1.0.2


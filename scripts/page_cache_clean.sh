#!/bin/bash

cd $HOME/public_html/ || exit

bin/magento cache:clean full_page

bin/magento cache:flush full_page

#!/bin/sh

cd $HOME


echo "Starting stress test. Please pay attention to htop and store frontend"
sudo siege -t120S -c255 -f urls.txt


echo "Second wave starting, please pay attention to htop and store frontend"
sudo siege -t180S -c255 -f urls.txt


echo "Third wave starting, please pay attention to htop and store frontend"
sudo siege -t240S -c255 -f urls.txt


echo "Fourth wave starting, please pay attention to htop and store frontend"
sudo siege -t300S -c255 -f urls.txt


echo "Fifth wave starting, please pay attention to htop and store frontend"
sudo siege -t360S -c255 -f urls.txt


echo "Sixth wave starting, please pay attention to htop and store frontend"
sudo siege -t420S -c255 -f urls.txt


echo "Finished"

#To run this script create a file named urls.txt with all URLs to be included in the test. All URLs included will be randomly tested
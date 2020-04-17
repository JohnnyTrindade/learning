#!/bin/sh

cd $HOME

echo "Enter first URL for load test:"
read FirstURL
echo "Enter second URL for load test:"
read SecondURL
echo "Enter third URL for load test:"
read ThirdURL
echo "Enter fourth URL for load test:"
read FourthURL

echo $FirstURL
echo $SecondURL
echo $ThirdURL
echo $FourthURL

echo "Starting stress test. Please pay attention to htop and store frontend"
sudo siege -t120S -c255 $FirstURL
sudo siege -t120S -c255 $SecondURL
sudo siege -t120S -c255 $ThirdURL
sudo siege -t120S -c255 $FourthURL

echo "Second wave starting, please pay attention to htop and store frontend"
sudo siege -t180S -c255 $FirstURL
sudo siege -t180S -c255 $SecondURL
sudo siege -t180S -c255 $ThirdURL
sudo siege -t180S -c255 $FourthURL

echo "Third wave starting, please pay attention to htop and store frontend"
sudo siege -t240S -c255 $FirstURL
sudo siege -t240S -c255 $SecondURL
sudo siege -t240S -c255 $ThirdURL
sudo siege -t240S -c255 $FourthURL

echo "Fourth wave starting, please pay attention to htop and store frontend"
sudo siege -t300S -c255 $FirstURL
sudo siege -t300S -c255 $SecondURL
sudo siege -t300S -c255 $ThirdURL
sudo siege -t300S -c255 $FourthURL

echo "Fifth wave starting, please pay attention to htop and store frontend"
sudo siege -t360S -c255 $FirstURL
sudo siege -t360S -c255 $SecondURL
sudo siege -t360S -c255 $ThirdURL
sudo siege -t360S -c255 $FourthURL

echo "Sixth wave starting, please pay attention to htop and store frontend"
sudo siege -t420S -c255 $FirstURL
sudo siege -t420S -c255 $SecondURL
sudo siege -t420S -c255 $ThirdURL
sudo siege -t420S -c255 $FourthURL

echo $FirstURL
echo $SecondURL
echo $ThirdURL
echo $FourthURL

echo "Finished"


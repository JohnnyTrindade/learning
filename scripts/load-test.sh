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


echo "Waiting 10 seconds before tests start"
sleep 10
start=$(date +'%s')

echo "Starting stress test. Please pay attention to htop and store frontend"
sudo siege -t120S -c255 $FirstURL
sudo siege -t120S -c255 $SecondURL
sudo siege -t120S -c255 $ThirdURL
sudo siege -t120S -c255 $FourthURL

echo "Waiting 10 seconds before second wave"
sleep 10

echo "Second wave starting, please pay attention to htop and store frontend"
sudo siege -t180S -c255 $FirstURL
sudo siege -t180S -c255 $SecondURL
sudo siege -t180S -c255 $ThirdURL
sudo siege -t180S -c255 $FourthURL

echo "Waiting 10 seconds before Third wave"
sleep 10

echo "Third wave starting, please pay attention to htop and store frontend"
sudo siege -t240S -c255 $FirstURL
sudo siege -t240S -c255 $SecondURL
sudo siege -t240S -c255 $ThirdURL
sudo siege -t240S -c255 $FourthURL

echo "Waiting 10 seconds before Fourth wave"
sleep 10

echo "Fourth wave starting, please pay attention to htop and store frontend"
sudo siege -t300S -c255 $FirstURL
sudo siege -t300S -c255 $SecondURL
sudo siege -t300S -c255 $ThirdURL
sudo siege -t300S -c255 $FourthURL

echo "Waiting 10 seconds before Fifth wave"
sleep 10

echo "Fifth wave starting, please pay attention to htop and store frontend"
sudo siege -t360S -c255 $FirstURL
sudo siege -t360S -c255 $SecondURL
sudo siege -t360S -c255 $ThirdURL
sudo siege -t360S -c255 $FourthURL

echo "Waiting 10 seconds before Sixth wave"
sleep 10

echo "Sixth wave starting, please pay attention to htop and store frontend"
sudo siege -t420S -c255 $FirstURL
sudo siege -t420S -c255 $SecondURL
sudo siege -t420S -c255 $ThirdURL
sudo siege -t420S -c255 $FourthURL

end=$(date +'%s')

echo $FirstURL
echo $SecondURL
echo $ThirdURL
echo $FourthURL

echo "Finished"

echo "Elapsed time was $(( $end - $start)) seconds"


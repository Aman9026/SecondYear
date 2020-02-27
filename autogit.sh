#This script should recursively traverse through the directories and commit every file

#!/bin/bash

[ $# -eq 1 ] && start=$1

if [ ! -d $start ]
then 
echo "$start not a directory"
exit 1
fi
dr=`pwd`
Dir=$(find "$start" -type d)
echo $Dir

for d in $Dir
do

cd $dr/$d

arry=(`ls -p | grep -v / `)
len=${#arry[*]}
i=0
while [ $i -lt $len ]; do

git add ${arry[$i]}
test= git commit -m "Added ${arry[$i]}"
sleep 60

if [ "$test" == "1" ]; then
echo "Not executed properly" >&2
exit 1
fi


let i++
done

done

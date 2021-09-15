#!/bin/bash

python vulnerable.py &
export PID=$!

for (( i=1; i<=10; i++ ))
do
    KB=$(ps -p $PID -o rss | sed -e 's/RSS//g' -e 's/ //g'| tr -d '\n')
    CPU=$(ps -p $PID -o %cpu | sed -e 's/%CPU//g' -e 's/ //g'| tr -d '\n')
    echo "CPU: $CPU %, Memory: $KB KB"
    sleep 1
done
#!/bin/sh

result=$(sh tests.sh)
if [ $result == 'SUCCESS' ]
then exit 0;                   # Code "0" : tout va bien
else exit 12;                  # Code "X" : erreur
fi

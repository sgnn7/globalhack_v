#!/bin/bash

while [ true ]; do
  echo "Grabbing...";
  git pull
  rsync -avz --delete ~/public_html . && git add . && git commit -m "Autocommit - $(date +%y%m%d-%H%M)" && git push origin HEAD;
  echo "Sleeping...";
  sleep 180;
done

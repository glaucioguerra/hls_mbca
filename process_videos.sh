#!/bin/sh  
cd /data/www/tmp
for i in `ls -a *.* | egrep -i "^.*\.(mov|mp4|ogv|mkv)$"`  
do  
  mkdir /data/www/videos/$i
  cp /data/www/tmp/$i /data/www/videos/$i
  cd /data/www/videos/$i
  /ffmpeg/bin/ffmpeg -threads 22 -i $i  -c:a libmp3lame -ar 48000 -ab 64k -c:v libx264 -r 24 -flags -global_header -map 0 -f segment  -segment_time 10 -segment_list myvideo.m3u8 -segment_format mpegts str%05d.ts
  mv /data/www/tmp/$i /data/www/tmp/$i.old
  echo "$i" >> /data/www/videos.txt
done

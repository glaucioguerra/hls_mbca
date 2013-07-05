hls_mbca
========

# HLS Demo Project

## 1. Lista de tarefas para configurar o ambiente:

1.1 Configuração do nginx

   * virtual host
   * cache

1.2 Instalação do ffmpeg

1.3 Instalação do nginx

1.4 Estrutura de diretórios


## 2. Configuração nginx

### Criar arquivo de configuração
```
vi /etc/nginx/config.d/hls_vs.conf
```

```
server {

    listen 80;
    location / {
            root /data/www;
    }
    

    location /videos/ {
        root /data/videos;
    }
}
```
### Estrutura de diretórios

```
mkdir -p /data/www
mkdir -p /data/videos

```

## 3. Conversão de h264 para ogg
### Instalação do ffmpeg2theora
```
wget http://v2v.cc/~j/ffmpeg2theora/ffmpeg2theora-0.29.linux64.bin
chmod +x ffmpeg2theora-0.29.linux64.bin
sudo install -m 755 ffmpeg2theora-0.29.linux64.bin /usr/local/bin/ffmpeg2theora
```

http://v2v.cc/~j/ffmpeg2theora/examples.html
```
root@ip-10-147-221-30:/videos/fantastic_four# ffmpeg2theora fantastic_four.mp4

Input #0, mov,mp4,m4a,3gp,3g2,mj2, from 'fantastic_four.mp4':
  Metadata:
    major_brand     : isom
    minor_version   : 1
    compatible_brands: isomavc1
    creation_time   : 2007-05-21 06:31:32
    genre           : Trailer
    artist          : 20th Century Fox
    title           : Fantastic Four: Rise of the Silver Surfer - Theatrical Trailer
    date            : 2007
  Duration: 00:02:09.23, start: 0.000000, bitrate: 5843 kb/s
    Stream #0:0(und): Video: h264 (High) (avc1 / 0x31637661), yuv420p, 1280x544, 5714 kb/s, 23.98 fps, 23.98 tbr, 24k tbn, 47.95 tbc
    Metadata:
      creation_time   : 2007-05-21 06:31:32
      handler_name    : GPAC ISO Video Handler
    Stream #0:1(und): Audio: aac (mp4a / 0x6134706D), 48000 Hz, stereo, s16, 123 kb/s
    Metadata:
      creation_time   : 2007-05-21 06:32:18
      handler_name    : GPAC ISO Audio Handler

  0:02:09.23 audio: 65kbps video: 2231kbps, time elapsed: 00:04:17
  0:02:09.23 audio: 65kbps video: 2231kbps, time elapsed: 00:04:17
```
### Comparativo de tamanhos após a conversão
```
root@ip-10-147-221-30:/videos/fantastic_four# ls -lha
total 216M
drwxr-xr-x 2 root root 4.0K Jul  4 16:58 .
drwxr-xr-x 3 root root 4.0K Jul  4 03:43 ..
-rw-r--r-- 1 root root  91M May 22  2007 fantastic_four.mp4
-rw-r--r-- 1 root root  36M Jul  4 17:03 fantastic_four.ogv
```


### Split do video em diversos .TS
#### http://webcache.googleusercontent.com/search?q=cache:hddaFrJ1P44J:samalpramod.blogspot.com/2013/03/how-convert-mp4-file-to-http-live.html+ffmpeg+hls+segmenter&cd=4&hl=pt-BR&ct=clnk&gl=br&client=firefox-a

```
ffmpeg -i valentina.mp4  -c:a libmp3lame -ar 48000 -ab 64k  -c:v libx264 -vcodec copy -vbsf h264_mp4toannexb  -flags -global_header -map 0 -f segment  -segment_list myvideo.m3u8 -segment_format mpegts str%05d.ts
```
## Historico de comandos

  542  apt-get install php
  543  apt-get install php5
  544  apt-get install php5-fpm php-pear php5-dev
  545  cd ..
  546  ls
  547  vi index.php
  548  vi /etc/nginx/conf.d/hls_vs.conf
  549  nginx -s stop
  550  nginx
  551  ls
  552  ll
  553  chown www-data:www-data index.php
  554  ll
  555  chown www-data:www-data java.zip
  556  vi index.php
  557  service php5-fpm start
  558  vi /etc/nginx/conf.d/hls_vs.conf
  559  nginx -s stop
  560  nginx
  561  history

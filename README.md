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

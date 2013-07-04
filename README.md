hls_mbca
========

HLS Demo Project

1. Configuração do ambiente

-Instalação do ffmpeg
-Instalação do nginx
-Configuração do nginx
   *virtual host
   *cache
-Estrutura de diretórios


2. Configuração nginx
vi /etc/nginx/config.d/hls_vs.conf
server {

    listen 80;
    location / {
            root /data/www;
    }
    

    location /videos/ {
        root /data/videos;
    }
}

3. Estrutura de diretórios
mkdir -p /data/www
mkdir -p /data/videos


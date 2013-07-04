hls_mbca
========

HLS Demo Project

1. Configuração do ambiente

Instalação do ffmpeg
Instalação do nginx
Configuração do nginx
Estrutura de diretórios

server {
    listen 80;
    location / {
        root /data/www;
    }

    location /videos/ {
        root /data/videos;
    }
}

hls_mbca
========

HLS Demo Project
server {
    listen 80;
    location / {
        root /data/www;
    }

    location /videos/ {
        root /data/videos;
    }
}

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


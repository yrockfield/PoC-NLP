FROM nginx:latest

COPY ./site.conf /etc/nginx/conf.d/default.conf
COPY ./wwwfiles /var/wwwroot
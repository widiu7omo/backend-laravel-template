FROM nginx:alpine
COPY public /var/www/public
ADD docker/nginx/default.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/
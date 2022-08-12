FROM nginx:alpine
COPY src/public /var/www/public
ADD docker/nginx/default.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www/
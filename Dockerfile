

FROM wordpress:5.9.2 AS build
WORKDIR /home/app
COPY html /var/www/html








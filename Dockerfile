FROM php:7.4-apache
COPY . /var/www/html/
RUN apt-get update && apt-get install -y git && rm -rf/var/lib/apt/lists/*
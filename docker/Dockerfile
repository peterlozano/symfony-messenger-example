FROM php:7.2-cli-stretch

# Install librdkafka1, dependency of the PHP extension
RUN apt-get update ;\
    apt-get install -y --no-install-recommends unzip librabbitmq4 librabbitmq-dev ;\
    apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false ;\
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pcntl

RUN pecl install amqp && echo "extension=amqp" > "/usr/local/etc/php/conf.d/amqp.ini"

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 8000

WORKDIR /srv/app
ENTRYPOINT ["/entrypoint.sh"]
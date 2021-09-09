FROM docker.toomba.nl/toomba-labs/php
ARG ENV
RUN if [ "$ENV" = "development" ] ; \
  then \
    rm -rf /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini && \
    rm -rf /usr/local/etc/php/conf.d/opcache-recommended.ini; \
  fi
COPY ./config/default.conf /etc/apache2/sites-enabled/000-default.conf
COPY ./config/default.conf /etc/apache2/sites-available/000-default.conf
COPY --chown=www-data:www-data ./src /var/www/html/
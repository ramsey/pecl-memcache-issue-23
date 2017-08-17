ARG php_version=latest
FROM php:${php_version}

COPY docker-setup.sh docker-entrypoint /usr/local/bin/
COPY memcache.ini /usr/local/etc/php/conf.d/

RUN /usr/local/bin/docker-setup.sh \
    && rm /usr/local/bin/docker-setup.sh

WORKDIR /code
EXPOSE 8000

ENTRYPOINT ["docker-entrypoint"]

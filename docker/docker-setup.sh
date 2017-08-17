#!/bin/sh

apt-get -y update
apt-get -y install memcached zlib1g-dev

groupadd -r memcached && useradd -r -g memcached memcached

mkdir -p /code/pecl-memcache
cd /code

curl -L -o pecl-memcache.tar.gz https://github.com/websupport-sk/pecl-memcache/archive/NON_BLOCKING_IO_php7.tar.gz
tar --strip-components=1 -C /code/pecl-memcache/ -zxf pecl-memcache.tar.gz

cd /code/pecl-memcache
phpize
./configure
make
make install

cd /code
rm -rf /code/pecl-memcache/ pecl-memcache.tar.gz

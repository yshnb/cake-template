# Cakephp Project template.
[![Circle CI](https://circleci.com/gh/mongorian-chop/cake-template.svg?style=svg)](https://circleci.com/gh/mongorian-chop/cake-template)

## composer install
composer install

## create tmp directory
- mkdir -p app/tmp/tests
- chmod -R 777 app/tmp/tests
- mkdir -p app2/tmp/tests
- chmod -R 777 app2/tmp/tests

## build-in server start
app
    php -S localhost:8080 -c /usr/local/etc/php/5.6/php.ini -t app/webroot
        or
app2
    php -S localhost:8080 -c /usr/local/etc/php/5.6/php.ini -t app/webroot

## phing task
./Vendor/bin/phing build

## ci
githubでPersonal access tokensを作る
- Environment variables
    GITHUB_ACCESS_TOKEN


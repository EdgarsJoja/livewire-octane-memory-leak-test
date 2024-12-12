#!/bin/bash

docker run --rm -it -v "$PWD":/app --user "$(id -u)":"$(id -g)" composer:latest install
./frankenphp php-cli artisan octane:frankenphp

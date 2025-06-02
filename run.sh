#!/bin/bash

if ! [ -d ./vendor ]; then
  docker run --rm -it -v "$PWD":/app --user "$(id -u)":"$(id -g)" composer:latest install
fi

./frankenphp php-cli artisan octane:frankenphp

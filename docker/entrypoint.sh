#!/usr/bin/env bash

set -e

composer install
php bin/console server:run 0.0.0.0:8000

exec "$@"
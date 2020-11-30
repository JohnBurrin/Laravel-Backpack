# Lavavel & Laravel Backpack Project

## Introduction
A Laravel Project built on docker featuring the Laravel Backpack Admin features.

## Installation
First check out this repo and from inside the repo direectory
1. `cp .env.example .env`
1. `docker-compose build`
1. `docker-compose up -d`
1. `docker-compose exec app bash`
1. `composer install`
1. `php artisan key:generate`
1. `php artisan migrate`
(optional)
1. `php artisan db:seed`

Once compleated you should me able to view the site on your host machine by browsing to http://localhost/

## Please Read
This section contains specific information about software version and any plugins that have been used, these plugins should already be configured to work once a build has completed.

### Laravel
	. Version: Latest

### Laravel Backpack
	. Version: Latest
	. Plugins:
		. Generators - https://github.com/Laravel-Backpack/Generators
		. Page Manager - https://github.com/Laravel-Backpack/PageManager
		. Permission Manager - https://github.com/Laravel-Backpack/PermissionManager
		. Revise Operation - https://github.com/Laravel-Backpack/revise-operation

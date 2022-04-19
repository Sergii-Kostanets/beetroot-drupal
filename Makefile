include .env

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: test install cli build hello up down start stop reup del delv fullreup zero one pull

default: install

test:
	docker-compose exec -T php curl 0.0.0.0:80 -H "Host: $(PROJECT_BASE_URL)" --write-out %{http_code} --silent --output /dev/null

install: up
	docker-compose exec -T php composer install --no-interaction
	docker-compose exec -T php bash -c "drush site:install --existing-config --db-url=mysql://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) -y"
	docker-compose exec -T php bash -c 'mkdir -p "drush" && echo -e "options:\n  uri: http://$(PROJECT_BASE_URL)" > drush/drush.yml'

cli:
	docker-compose exec php bash

build:
	docker-compose up -d --build php

hello:
	@echo "Testing"
	@echo "Project $(PROJECT_NAME)!"
	echo "hello world"

up:
	@echo "Up $(PROJECT_NAME)!"
	docker-compose up -d --build --remove-orphans

down:
	@echo "Down $(PROJECT_NAME)."
	docker-compose down

start:
	@echo "Starting $(PROJECT_NAME)!"
	docker-compose start

stop:
	@echo "Stopping $(PROJECT_NAME)."
	docker-compose stop

reup:
	docker-compose down
	docker-compose up -d --build --remove-orphans

del:
	@echo "Deleting all containers $(PROJECT_NAME)!"
	docker system prune -a

delv:
	@echo "Deleting volumes $(PROJECT_NAME)!"
	docker system prune --volumes

fullreup:
	docker-compose down
	docker system prune -a
	docker system prune --volumes
	docker-compose pull
	docker-compose up -d --build --remove-orphans

zero:
	export DOCKER_BUILDKIT=0
	export COMPOSE_DOCKER_CLI_BUILD=0

one:
	export DOCKER_BUILDKIT=1
	export COMPOSE_DOCKER_CLI_BUILD=1

pull:
	@echo "Pulling php:8.1-apache:"
	docker pull php:8.1-apache
	@echo "________________________________________________________"
	@echo "Pulling traefik:v2.6"
	docker pull traefik:v2.6
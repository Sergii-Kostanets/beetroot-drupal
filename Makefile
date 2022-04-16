include .env

THIS_FILE := $(lastword $(MAKEFILE_LIST))
.PHONY: install cli build hello up down start stop reup del delv fullreup zero one pull

default: install

install: up
	sleep 10
	docker-compose exec php bash -c "drush site:install --existing-config --db-url=mysql://$(MYSQL_USER):$(MYSQL_PASS)@$(MYSQL_HOST):$(MYSQL_PORT)/$(MYSQL_DB_NAME) -y"
	@mkdir -p "drush"
	@echo "options:\n uri: 'http://$(PROJECT_BASE_URL)'" > drush/drush.yml
	docker-compose exec php bash -c "drush user:create --mail=test@mail.com --password=test test"
	docker-compose exec php bash -c "drush user:role:add administrator test"
	docker-compose exec php bash -c "drush uli"

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
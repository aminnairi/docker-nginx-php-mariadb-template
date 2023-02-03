.PHONY: build start stop restart database

build:
	docker-compose build

start: build
	docker compose up --detach

stop:
	docker-compose down --remove-orphans --volumes --timeout 0

database:
	docker compose exec mariadb sh -c 'mysql --user=$$DATABASE_USER --password=$$DATABASE_PASSWORD $$DATABASE_NAME'

restart: stop start

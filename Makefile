DC = docker-compose
DCY = ./srcs/docker-compose.yaml

all: up

up:
	$(DC) -f $(DCY) up -d

down:
	$(DC) -f $(DCY) down

ps:
	$(DC) -f $(DCY) ps

re:
	$(DC) -f $(DCY) up --build

clean:

	docker rmi mariadb
	docker rmi wordpress
	docker rmi nginx
	docker volume rm srcs_db srcs_wp

.PHONY: all up down ps logs re clean

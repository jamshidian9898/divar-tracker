# -------------------global commands-------------------
stop:
	docker-compose stop
start:
	docker-compose up --detach
destroy:
	docker-compose down --volumes
build:
	docker-compose up --detach --build
log:
	docker-compose logs -f



# -------------------internal traefik container commands-------------------
traefik-shell:
	docker-compose exec traefik sh



# -------------------internal rabbitmq container commands-------------------
rabbitmq-shell:
	docker-compose exec rabbitmq sh



# -------------------internal phpmyadmin container commands-------------------
phpmyadmin-shell:
	docker-compose exec phpmyadmin sh



# -------------------internal mysql container commands-------------------
mysql-shell:
	docker-compose exec mysql sh



# -------------------internal ui container commands-------------------
ui-shell:
	docker-compose exec ui sh
ui-seed:
	docker-compose exec ui php artisan db:seed
ui-migrate:
	docker-compose exec ui php artisan migrate:fresh
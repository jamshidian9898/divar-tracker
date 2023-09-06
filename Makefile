# -------------------global commands-------------------
stop:
	docker-compose down
start:
	docker-compose up --detach
destroy:
	docker-compose down --volumes
build:
	docker-compose up --detach --build
log:
	docker-compose logs -f
ps:
	watch "docker-compose ps -a"



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



# -------------------internal frontend container commands-------------------
frontend-shell:
	docker-compose exec frontend sh



# -------------------internal backend container commands-------------------
backend-shell:
	docker-compose exec backend sh
backend-seed:
	docker-compose exec backend php artisan db:seed
backend-migrate:
	docker-compose exec backend php artisan migrate:fresh
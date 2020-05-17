up:
	docker-compose up -d
stop:
	docker-compose stop
restart:
	docker-compose restart
down:
	docker-compose down
destroy:
	docker-compose down --rmi all --volumes
ps:
	docker-compose ps
app:
	docker-compose exec php sh -l
redis:
	docker-compose exec redis sh -l
build:
	docker-compose up --build -d

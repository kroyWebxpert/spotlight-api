#########################################################################
# "Public API"
#    These are commands that users are expected to interact with directly
#    when developing the application.
#
#    A from-scratch install to run the API and client application
#    end-to-end includes the following commands in succession:
#    - $ make
#    - $ make seed-db
#    - $ make build-client
#    - $ make start-client
#
#    Visit the server: http://localhost:8080
#    Visit the client: http://localhost:3000
#
#    To stop the application from running
#    - $ control+c
#    - $ make stop
#########################################################################

install: clean prepare start generate-key

help:
	@echo "Spotlight Admin Makefile Commands"
	@echo "  |"
	@echo "  |_ install      - (default) Install the application from scratch in a single command"
	@echo "  |_ help         - Show this message"
	@echo "  |_ clean        - Remove all artifacts created from the installation process"
	@echo "  |_ seed-db      - Hydrate the database using migration files, import seed data"
	@echo "  |_ start        - Bring up the application and database in the background"
	@echo "  |_ stop         - Bring down the application"
	@echo "  |_ update       - Update application dependencies
	@echo "  |_ build-client - Build the control panel client
	@echo "  |_ start-client - Start the control panel client
	@echo "  |__________________________________________________________________________________________"
	@echo " "

clean: stop remove-deps remove-containers
	rm -f .env
	rm -rf docker/data/.data

seed-db:
	./docker/bin/php.sh artisan doctrine:migrations:migrate
	./docker/bin/php.sh artisan spotlight:qa:prepare

start:
	docker-compose up -d --build --remove-orphans

stop:
	-docker-compose down

update:
	git pull
	./docker/bin/composer.sh update bsd/spotlight-ui --prefer-source
	./docker/bin/composer.sh update

build-client: build-containers-client install-deps-client

start-client: update-deps-client
	docker run -it \
	    -p3000:3000 \
	    --rm \
	    -v $(PWD)/vendor/bsd/spotlight-ui:/usr/src/app \
	    --name spotlight-ui_1 \
	    spotlight/control-panel npm start

#############################################################
# "Private" Commands
#    Used as sub-commands by other Make routines, but users
#    probably won't need/want to call these directly. Not
#    included in the "help" documentation
#############################################################

prepare: generate-env build-containers install-deps

build-containers:
	docker build -t spotlight/utility:v1 docker/containers/utility/
	docker build -t spotlight/admin:v1 docker/containers/admin/

remove-containers:
	-docker rm -f spotlight/utility:v1
	-docker rm -f spotlight/admin:v1

remove-images: remove-containers
	-docker rmi -f spotlight/utility:v1
	-docker rmi -f spotlight/admin:v1

install-deps:
	./docker/bin/composer.sh install

update-deps:
	./docker/bin/composer.sh update

remove-deps:
	rm -rf vendor

generate-env:
	cp .env.example .env

generate-key:
	./docker/bin/php.sh artisan key:generate

build-containers-client:
	docker build -t spotlight/control-panel $(PWD)/vendor/bsd/spotlight-ui

remove-containers-client:
	-docker rm -f spotlight/control-panel

remove-images-client: remove-containers-client
	-docker rmi -f spotlight/control-panel

install-deps-client:
	docker run -it \
	    -p3000:3000 \
	    --rm \
	    -v $(PWD)/vendor/bsd/spotlight-ui:/usr/src/app \
	    --name spotlight-ui_1 \
	    spotlight/control-panel npm install

update-deps-client:
	docker run -it \
	    --rm \
	    -v $(PWD)/vendor/bsd/spotlight-ui:/usr/src/app \
	    --name spotlight-ui_1 \
	    spotlight/control-panel npm update

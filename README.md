# docker-lemp
This is a docker LEMP stack

It is built from:
* Nginx:stable:alpine
* PHP:
* Mariadb:lts

##  Installation
 
<strong>Step 1:</strong> Clone this repository on your local computer
```shell
sudo git clone git@github.com:bravepinata/docker-lemp.git
```

<strong>Step 2:</strong> Enter the newly created imh_v01 directory
```shell
cd docker-lemp/
```

<strong>Step 3:</strong> Remove the local .git repository
```shell
sudo rm -rf .git
```

<strong>Step 4:</strong> Create a MySQL dump file of the databases
* DBOne
* DBTwo

<strong>Step 5:</strong> Move the MySQL dump files to the seed directory

<strong>Step 6:</strong> In the docker-compose file, change the database build directory from schema/ to seed/ 
1. Comment this out: - ./database/schema/DBOne.sql:/docker-entrypoint-initdb.d/schema.sql:ro
2. Add this in: - ./database/seed/DBOne.sql:/docker-entrypoint-initdb.d/schema.sql:ro

<strong>Step 7:</strong> Pull the components, build the containers, and populate the environment
```shell
sudo docker compose up -d
```

<strong>Step 8:</strong> When it completes building, go to http://localhost

<strong>Step 9:</strong> Follow the instructions on the localhost domain

# PHP-Server (Apache) and MySQL

Run a PHP server and a MySQL database by using Docker. A sample website is provided with this repository.

## Requirements

**Docker Desktop**, download here <https://www.docker.com/get-started>.

## Installation

**Docker Desktop** has to be running.

Now, you can build the Docker Image by running:

```sh
docker-compose build
```

Start the Servers by executing:

```sh
docker-compose up
```

Docker will now run the containers.

## Usage

### PHP

Place the php code to be run in the `php/` directory.

Access the php website at <http://localhost:8080>.

### MySQL

To access the MySQL database in php or any database management system, use the login data as stated in `docker-compose.yml`

### PHPMyAdmin

The database can also be accessed and managed with PHPMyAdmin.

Simply go to <http://localhost:8081>.

Username and password can be found in `docker-compose.yml`

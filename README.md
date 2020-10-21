# PHP-Server (Apache) and MySQL

Run a PHP server and a MySQL database by using Docker.

## Requirements

**Docker Desktop**, download here <https://www.docker.com/get-started>.

## Installation

Simply start docker, go to this directory in the command line and then type:

```sh
docker-compose up
```

Docker will now install and run the containers.

## Usage

### PHP

Place the php code to be run in the `php/` directory.

Access the php website at <http://localhost:8080>.

### MySQL

To access the MySQL database in php or any database management system use the following configuration:

- `host: mysql` (localhost does not work in docker clusters)
- `port: 3306` (the default mysql port; can be omitted in most cases)
- `user: root`
- `password: test`

### PHPMyAdmin

The database can also be accessed and managed with PHPMyAdmin.

Simply go to <http://localhost:8081>.

Again, `user: root` and `password: test`.

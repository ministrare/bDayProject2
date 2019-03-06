# LAMP stack built with Docker Compose

This is a basic LAMP stack environment built using Docker Compose. It consists following:


* PHP 7.2
* Apache 2.4
* MySQL 5.7
* phpMyAdmin

## Installation

Clone this repository on your local computer. Run the `docker-compose up -d`.

```shell
git clone git@github.com:ministrare/bDayProject2.git
cd bDayProject2/
git fetch --all
cd laradock
docker-compose up -d nginx mariadb phpmyadmin
```

(if you get a error on the last command, follow step one of (this tutorial)[https://www.digitalocean.com/community/tutorials/how-to-install-docker-compose-on-ubuntu-18-04] and after completion retry last command)

Your LAMP stack is now ready!! You can access it via `http://localhost:8001`.

## Web Server

Apache is configured to run on port 8001. So, you can access it via `http://localhost:8001`.

#### Connect via SSH

You can connect to web server using `docker exec` command to perform various operation on it. Use below command to login to container via ssh.

```shell
docker exec -it laradock_workspace_1 bash
```

## PHP

The installed version of PHP is 7.2

#### Extensions

By default following extensions are installed.

* mysqli
* mbstring
* zip
* intl
* mcrypt
* curl
* json
* iconv
* xml
* xmlrpc
* gd

> If you want to install more extension, just update `./bin/webserver/Dockerfile`. You can also generate a PR and we will merge if seems good for general purpose.
> You have to rebuild the docker image by running `docker-compose build` and restart the docker containers.

## phpMyAdmin

phpMyAdmin is configured to run on port 8080. Use following default credentials.

http://localhost:8080/  
username: root  
password: root

## Redis

Please read from appropriate version branch.

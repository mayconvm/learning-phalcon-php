# Project to test with Phalcon PHP

The intention this projeto is create a server to do games points count.

## Install
	https://phalconphp.com/pt/download/linux

## Start
    * docker-compose build


# TODO:

[] Write script file to environment DEV
    [] Make docker-composer
        [x] Container with php-phalcon
        [] Container with Nginx
    [] Build Project


[] Mysql
    [] Create tables
        [] Players
        [] Match
        [] Points

[] API
    [] CRUD Players
    [] CRUD Match
    [] CRUD Points

[] Monitoring
    [] Write script file to environment DEV
        [] Container with Beats (https://www.elastic.co/products/beats)
        [] Container with Logstash
        [] Container with ElasticSearch
        [] Container with Kibana
    [] Beats observer Nginx
    [] Beats connect Logstash
        [] Transform log Nginx
    [] Logstash send log to Elastcsearch
    [] Connect Kibana in Elastcsearch


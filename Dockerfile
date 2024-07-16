FROM php:8.4.0alpha1-zts-alpine3.20

WORKDIR / .

FROM httpd:latest

FROM mariadb:latest
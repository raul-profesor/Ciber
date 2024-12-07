FROM debian:latest

ARG DEBIAN_FRONTEND=noninteractive

ARG MYSQL_8_file=mysql-apt-config_0.8.24-1_all.deb

RUN apt update && apt install -y wget lsb-release gnupg iproute2 gosu

RUN wget -c https://dev.mysql.com/get/${MYSQL_8_file} &&\
    wget -qO - https://repo.mysql.com/RPM-GPG-KEY-mysql-2023 | apt-key add - &&\
    dpkg -i ${MYSQL_8_file} &&\
    apt update &&\
    apt upgrade -y &&\
    apt install -y mysql-server

COPY mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

EXPOSE 3306


FROM debian:buster

RUN apt-get update
RUN apt-get upgrade -y

RUN apt-get install -y default-mysql-server

COPY ./conf/init_mdb.sh /var/www/
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
RUN chmod +x /var/www/init_mdb.sh

EXPOSE 3306

ENTRYPOINT ["/var/www/init_mdb.sh"]
CMD ["mysqld"]

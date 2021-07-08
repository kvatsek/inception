#!/usr/bin/env bash
	mkdir -p /run/php/
	touch /run/php/php7.3-fpm.pid
        
	

if [ ! -f /var/www/html/wp-config.php ]; then
	mkdir -p /var/www/html/
	wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
	chmod +x wp-cli.phar
	mv wp-cli.phar /usr/local/bin/wp
	
	cd html/
	wp core download --allow-root
	mv /var/www/wp-config.php /var/www/html/

	echo "Wordpress create site"
	wp core install --allow-root \
		--url=${WP_SITE_URL} \
		--title=${WP_TITLE_SITE} \
		--admin_user=${MYSQL_USER} \
		--admin_password=${MYSQL_PASSWORD} \
		--admin_email=${WP_ADMIN_EMAIL}

	echo "user2"
	wp user create --allow-root tatiana tatiana@mail.ru --user_pass=${USER_PASS}
	
fi
	 
exec "$@"

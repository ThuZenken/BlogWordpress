#!/bin/bash

docker-compose down --volumes

docker-compose up -d

while ! docker logs -t --tail 1000 wordpress 2>&1 | grep -i "apache2 -D FOREGROUND"
do
  sleep 1
  echo "Installing Wordpress..."
done

echo "Wordpress installed!"

docker exec -it wordpress /bin/bash -c "chown -R www-data:www-data /var/www/html; chmod 777 /var/www/html/wp-content/plugins /var/www/html/wp-content/"

setupWordpressCmd="wp core install --url=\"localhost:8081\" --title=\"LiveChat\" --admin_user=\"admin\" --admin_password=\"admin\" --admin_email=\"admin@lc.com\""

docker-compose run --rm cli /bin/bash -c "$setupWordpressCmd"

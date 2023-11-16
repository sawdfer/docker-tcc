docker run -d -v "$(pwd)/api/db/data:/var/lib/mysql" --rm --name mysql-container mysql-system
timeout 3 > NUL
docker run -d -p 9001:9001 --link mysql-container --rm --name node-container node-system
docker run -d -p 8001:80 --link node-container --rm --name php-container php-system
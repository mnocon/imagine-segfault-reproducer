Reproducer for https://github.com/php-imagine/Imagine/issues/826

To reproduce run:
```
composer install
docker-compose up -d
docker-compose exec php73 sh -c "php -f reproduce.php"
```

You should see:
```
Segmentation fault
```

You can see that it works on PHP 7.4:
```
docker-compose exec php74 sh -c "php -f reproduce.php"
```

The Docker images are from https://github.com/ezsystems/docker-php

Images comes from Wikipedia: https://en.wikipedia.org/wiki/File:Example.jpg

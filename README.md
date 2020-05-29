## Intro


- git clone
    ```bash
        git clone https://github.com/TsPuujee/docker-mysql-php-example
    ```
- start docker
    ```bash
        docker-compose up -d
    ```

- stop docker
    ```bash
        docker-compose down
    ```

- import dump to docker
    ```bash
        cat dump.sql | docker exec -i dockermysqlphpexample_database_1 /usr/bin/mysql -u root --password=my_secret_pw_shh mydatabase
    ```
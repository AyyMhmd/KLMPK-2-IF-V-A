# Laravel Sail

Silahkan untuk mengikuti langkah-langkah berikut:
1. Clone repository
2. Pindah branch ke `feature/laravel`
3. Jalankan perintah berikut:
    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/opt \
        -w /opt \
        laravelsail/php81-composer:latest \
        composer install --ignore-platform-reqs
    ```
4. Jalankan perintah berikut jika ada error, kemudian lakukan langkah 3 lagi:*
    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v $(pwd):/opt \
        -w /opt \
        laravelsail/php81-composer:latest \
        composer update laravel/sail
    ```


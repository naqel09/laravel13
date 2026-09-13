#menggunakan image php 8.3 sebagai dasar container
FROM php:8.3-cli

# menentukan folder kerja utama di dalam container
WORKDIR /var/www

#menginstall package linux yang dibutuhkan untuk menjalankan extension php dan beberapa kebutuhan laravel
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && rm -rf /var/lib/apt/lists/*

#menginstall extension php yang dibutuhkan laravel
RUN docker-php-ext-install\
    pdo \
    pdo_pgsql \
    zip

# menyalin composer dari image composer resmi ke dalam containerr
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Menyalin file composer.json dan composer.lock terlebih dahulu.
# Tujuannya agar Docker dapat menggunakan cache ketika
# dependency Composer belum berubah.
COPY composer.json composer.lock ./

# menyalin source code laravel dari komputer ke dalam container
COPY . .

# Menginstall dependency Laravel menggunakan Composer.
# --no-interaction = tidak meminta input dari user.
# --prefer-dist = mengambil package dalam bentuk distribution.
# --optimize-autoloader = mengoptimalkan autoloader Composer.
RUN composer install \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Memberikan permission pada folder storage dan bootstrap/cache.
# Laravel membutuhkan folder tersebut untuk menulis cache,
# log, session, dan file lainnya.
RUN chmod -R 775 storage bootstrap/cache

# memberitahu docker bahwa container akan menggunakan port 8000 untuk server laravel
EXPOSE 8000

# Perintah yang otomatis dijalankan ketika container dimulai.
# Laravel dijalankan pada semua network interface
# sehingga dapat diakses dari luar container.
CMD [ "php", "artisan", "serve","--host=[0.0.0.0]", "--port=8000"]
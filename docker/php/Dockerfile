FROM php:8.1-fpm

# Install the necessary system packages
RUN apt-get update && apt-get install -y \
    wget \
    git \
    libicu-dev \
    libzip-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install \
    intl \
    opcache \
    zip

# Install the Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash
RUN mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Utwórz użytkownika i grupę appuser
RUN groupadd -g 1000 appuser && \
    useradd -r -u 1000 -g appuser appuser && \
    mkdir /home/appuser && \
    chown -R appuser:appuser /home/appuser

# Zmień właściciela katalogu roboczego na użytkownika appuser
RUN chown -R appuser:appuser /var/www/html

# Ustaw użytkownika appuser jako domyślny użytkownik kontenera
USER appuser
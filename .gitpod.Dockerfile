FROM gitpod/workspace-full

# Cài đặt PHP và các extension cần thiết cho Laravel
USER root
RUN apt-get update \
    && apt-get install -y php php-cli php-mbstring php-xml php-zip php-sqlite3 php-curl php-gd php-mysql unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Cài Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer 
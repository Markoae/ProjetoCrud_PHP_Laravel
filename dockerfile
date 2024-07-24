# Usa uma imagem base do PHP com Apache
FROM php:8.2-apache

# Atualiza os pacotes e instala dependências necessárias
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        netcat-openbsd \
        && docker-php-ext-install pdo_mysql zip

# Habilita os módulos do Apache necessários
RUN a2enmod rewrite

# Copia o código da aplicação para o diretório web do Apache
COPY . /var/www/html/

# Define o diretório de trabalho
WORKDIR /var/www/html

# Instala o Composer globalmente
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala as dependências do Composer
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --prefer-dist --no-interaction --no-dev --optimize-autoloader

# Copia o arquivo .env.example para .env
# (Note que aqui assumimos que o arquivo .env está presente no seu projeto e deve ser ajustado manualmente)
COPY .env /var/www/html/.env

# Ajusta as permissões do diretório storage
RUN chown -R www-data:www-data storage

# Ajuste de permissões
RUN chown -R www-data:www-data /var/www/html/storage/logs
RUN chmod -R 775 /var/www/html/storage/logs

# Define as variáveis de ambiente para o Apache
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
ENV APACHE_LOG_DIR=/var/log/apache2

# Configura o virtual host do Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Copia o script de entrada
COPY entrypoint.sh /usr/local/bin/entrypoint.sh

# Expor a porta 80 para o Apache
EXPOSE 80

# Comando para iniciar o Apache em primeiro plano
CMD ["apache2-foreground"]

# Define o script de entrada como o comando de inicialização
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
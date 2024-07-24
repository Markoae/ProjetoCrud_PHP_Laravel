#!/bin/sh

# Aguardando o banco de dados estar disponível
echo "Aguardando o banco de dados..."
until nc -z -v -w30 $DB_HOST $DB_PORT
do
  echo "Esperando pelo banco de dados..."
  sleep 5
done
echo "Banco de dados está disponível."

# Executa as migrações e seeders
php artisan migrate --force
php artisan db:seed --force

# Inicia o Apache em primeiro plano
apache2-foreground

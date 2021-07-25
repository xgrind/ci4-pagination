# Antes de começar

## Para criar o banco de dados, digite no terminal. (Ou crie manualmente):

php spark db:create testdb

## Para criar a tabela:

php spark migrate

## Para popular a tabela:

php spark db:seed UserSeeder

## E finalmente, para subir o servidor:

php spark serve

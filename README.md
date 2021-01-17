# Criando API com Lumen PHP Framework

Este repositório contém uma API simples desenvolvida usando o [Laravel Lumen](https://lumen.laravel.com/docs) o micro frameworkt PHP produzido pelos mesmos criadores do Laravel. Trata-se de uma API que implementa um CRUD para um Pet Shop fictício.  Nela foram implementados os cadastros de Raças (Breeds) e Animais (Pets).

## Instalação

Para instalar a API , na interface de linha de comando (shell) digite os comandos abaixo:

`git clone https://github.com/ewertonvaz/petshop-api petshop-api`

` cd petshop-api`

`composer install`

Configure seu banco de dados usando o arquivo `.env` e depois execute as migrations e seeds:

`php artisan migrate`

`php artisan db:seed`

Por último, ative o servidor web embutdido do PHP com o comando:

`php -S localhost:8000 -t public`

Se quiser que a API responda em uma outra porta pode alterar o 8000 acima pelo número da porta desejada.

## Utilização
Para utilizar a API acesse uma das URL abaixo:
(http://localhost:8000/api/v1/breeds)
(http://localhost:8000/api/v1/pets)
Elas implementam, respectivamente, o CRUD para as Raças e os Animais.
Para inclusão utilizar uma requiisção do tipo POST; para alteração uma PATCH; para exclusão DELETE e para consultar/recuperar usar o GET.


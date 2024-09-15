# ERP Laravel

Este é um projeto simples de ERP desenvolvido com **Laravel** e **Laravel Breeze**. Ele inclui um CRUD de clientes e foi criado para servir de modelo para futuros projetos.

## Tecnologias

* **PHP 8.3.8**
* **Laravel 10**
* **Laravel Breeze** (para autenticação)
* **MySQL** ou outro banco compatível

## Funcionalidades

* Autenticação básica (registro, login, etc.) com **Laravel Breeze**
* CRUD de clientes:
  + Cadastro de novos clientes
  + Listagem com paginação
  + Edição de clientes
  + Exclusão de clientes

## Instalação

1. Clone o repositório:
   

    ```bash
   git clone https://github.com/thiago/erp-laravel.git
   ```

2. Instale as dependências:
    

    ```bash
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env` e configure as variáveis:
    

    ```php
    cp .env.example .env
    ```

4. Rode as migrações:
    

    ```php
    php artisan migrate
    ```

5. Inicie o servidor:
    

    ```php
    php artisan serve
    ```

## Autores

* [Thiago Gomes da Silva](https://github.com/thiagow327)
"Essa versão simplificada destaca o essencial sobre o projeto, o que facilita a leitura e o entendimento rápido."

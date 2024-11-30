# My Loan

Aplicação para gerenciamento de empréstimos pessoais

> Application for managing personal loans

## Tecnologias

-   **VueJS** - frontend
-   **Laravel** - backend
-   **MariaDB** - banco de dados relacional
-   **ElasticSearch** - busca e indexação de dados
-   **Docker** - containerização da aplicação

> Tech Stack
>
> -   **VueJS** - frontend
> -   **Laravel** - backend
> -   **MariaDB** - relational database
> -   **ElasticSearch** - data search and indexing
> -   **Docker** - containerizing the application

## Configuração do Projeto

### Pré-requisitos

-   **Docker** e **docker-compose** instalados em sua máquina.

### Passos para Configurar o Projeto

1. **Clone o Repositório**

    ```bash
    git clone git@github.com:molotovisq/my-loan.git
    cd my-loan
    ```

2. **Copie o arquivo `.env.example` para `.env`**

    ```bash
    cp .env.example .env
    ```

    Em seguida, edite o arquivo `.env` e preencha as credenciais do banco de dados

    ```env
    DB_CONNECTION=mariadb
    DB_HOST=mariadb
    DB_PORT=3306
    DB_DATABASE=myloan
    DB_USERNAME=myloan
    DB_PASSWORD=loan@Pass2
    ```

3. **Instale as Dependências do Composer**

    ```bash
    composer install
    ```

4. **Gere a chave da aplicação**

    ```bash
    php artisan key:generate
    ```

5. **Suba os containers com o laravel sail**

    ```bash
    ./vendor/bin/sail up
    ```
    >Caso ao subir os containers, ocorra algum problema relacionado á conexão com o banco de dados, procurar o volume do banco com `docker volume ls` e remover ele com o comando: `docker volume rm <volume_name>`

6. **Ajuste as Permissões das Pastas Necessárias**

    Ajuste as permissões das pastas `storage` e `bootstrap/cache`
    <br>
    Dentro do contêiner PHP, execute:

    ```bash
    chown -R www-data:www-data storage bootstrap/cache
    ```

    ```bash
    chmod o+w storage/ -R
    ```


8. **Execute as _Migrations_**

    ```bash
    php artisan migrate
    ```

9. **Acesse a Aplicação**

    ```
    http://localhost:3001
    ```

### Observações

-   **Erro de Permissão**: Se você encontrar erros de permissão, verifique as permissões das pastas `storage` e `bootstrap/cache`.
-   **Erro de Conexão com o Banco de Dados**: Verifique suas configurações no arquivo `.env` e certifique-se de que o contêiner MariaDB está em execução.

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
    DB_DATABASE=my-loan
    DB_USERNAME=myloan
    DB_PASSWORD=loan@passCK4
    ```

3. **Inicie os Contêineres Docker**

    Execute o seguinte comando para iniciar os contêineres:

    ```bash
    docker-compose up -d
    ```

4. **Acesse o Contêiner PHP**

    ```bash
    docker exec -it <nome_do_container_php> /bin/sh
    ```

    Substitua `<nome_do_container_php>` pelo nome real do contêiner PHP, que pode ser encontrado com o comando `docker ps`.

5. **Instale as Dependências do Composer**

    Dentro do contêiner PHP, execute:

    ```bash
    composer install
    ```

6. **Ajuste as Permissões das Pastas Necessárias**

    Ajuste as permissões das pastas `storage` e `bootstrap/cache`
    <br>
    Dentro do contêiner PHP, execute:

    ```bash
    chown -R www-data:www-data storage bootstrap/cache
    ```

7. **Gere a chave da aplicação**

    ```bash
    php artisan key:generate
    ```

8. **Execute as _Migrations_**

    ```bash
    php artisan migrate
    ```

9. **Acesse a Aplicação**

    ```
    http://localhost:19000
    ```

### Solução de Problemas

-   **Erro de Permissão**: Se você encontrar erros de permissão, verifique as permissões das pastas `storage` e `bootstrap/cache`.
-   **Erro de Conexão com o Banco de Dados**: Verifique suas configurações no arquivo `.env` e certifique-se de que o contêiner MariaDB está em execução.

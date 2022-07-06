# Lumen Api

Aplicação desenvolvida em PHP com o framework Lumen utilizando **[auth0](https://auth0.com/)** para um To Do list.

# Tecnologias

  - Lumen 9
  - PHP 8
  - MySQL
  - Docker

# Preparação

Certifique-se de ter instalados em sua máquina o **[Docker](https://docs.docker.com/engine/install/)** e o **[Docker Compose](https://docs.docker.com/compose/install/)**.

# Configuração

  - Clone este repositório para sua máquina;
  - Acesse seu terminal e vá para o diretório do projeto;
  - No terminal execute **docker-compose build**;
  - Em seguida ainda no terminal execute **docker-compose up**;
  - Nos arquivos (root) do projeto, copie e renomeie **.env.example** para **.env**;
  - No terminal, acesse o container app com o comando **docker-compose exec lumen sh**;
  - No container, instale as dependências do composer com o comando **composer install**;
  - Agora utilize qualquer database tool de sua preferência para criar o banco de dados. Esse projeto já vem com o PHPMyAdmin e você pode acessa-lo em **http://localhost:8080/** com as credênciais **root**/**root**. Com tudo pronto, crie um banco de dados chamado **lumen**;
  - De volta ao container no terminal, gere as tabelas do banco com o comando **php artisan migrate**;
  - Agora você pode fazer as requisições através do endereço **http://localhost/api/**.

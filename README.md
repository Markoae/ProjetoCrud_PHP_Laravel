## Projeto CRUD PHP/Laravel

#
Para executar o projeto você irá precisar ter instalado o Docker Desktop:

[Docker Desktop](https://www.docker.com/products/docker-desktop/)

Depois de instalado o Docker Desktop, clone o repositorio:

````
git clone https://github.com/Markoae/ProjetoCrud_PHP_Laravel.git
````

Entre no diretório do projeto:

````
cd \ProjetoCrud_PHP_Laravel
````

Após ter acesso a pasta onde se encontra o projeto, no terminal insira o seguinte comando:

````
docker-compose up -d --build
````

* **``up:``** : inicia e executa os serviços definidos no arquivo docker-compose.yml
* **``-d``** : executa os containers em segundo plano, ou seja, não anexa o terminal à saída dos containers.
* **``--build``** : reconstrói as imagens dos serviços antes de iniciar os containers.
#

Após ter executado o comando, no seu navegador acesse a aplicação em:

````
localhost:8080
````
#
Este procedimento foi feito com base no SO Windows 11. <br/>
Verificar na documentação do [Docker Docs](https://www.docker.com/products/docker-desktop/](https://docs.docker.com/)) o procedimento para a configuração e instalação do Docker Desktop em sistemas diferentes.<br/>

Enjoy it!

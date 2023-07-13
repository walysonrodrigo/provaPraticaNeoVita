# DeoVita

Aplicação desenvolvida com o framework CodeIgniter (versão 4.3).

## Requisitos
- PHP 8 ou superior
- PostgreeSQL

## Instalação

Para utilizar o projeto realize os seguintes passos:

Abra seu terminal de comandos e vá para uma pasta que queira que o projeto seja instalado. Nesse momento cole no terminal o seguinte comando:

```bash
[git clone https://github.com/walysonrodrigo/provaPraticaNeoVita.git]
```

Será criada uma pasta que conterá os arquivos do projeto. Entre nessa pasta. Para realizar essa ação você pode colar esse comando em seu terminal:

```bash
cd provaPraticaNeoVita
```

## PostGreSQL
- Faça o download e a instalação do PostgreSQL: Visite o site oficial do PostgreSQL (https://www.postgresql.org/) e baixe a versão adequada para o seu sistema operacional. Siga as instruções de instalação fornecidas pelo instalador.
- Configure o PostgreSQL: Durante a instalação, você será solicitado a fornecer uma senha para o usuário administrador "postgres". Anote essa senha, pois você precisará dela para acessar o banco de dados.
- Inicie o servidor PostgreSQL: Após a instalação, o servidor PostgreSQL será iniciado automaticamente. Em alguns sistemas operacionais, ele também será configurado para iniciar automaticamente sempre que você reiniciar o computador.
- Acesse o banco de dados: Agora você pode acessar o banco de dados usando uma ferramenta cliente, como o pgAdmin (https://www.pgadmin.org/) ou a linha de comando através do utilitário psql. Para usar o psql, abra o terminal e digite o seguinte comando:
```bash
psql -U postgres
```
- Será solicitada a senha do usuário "postgres" que você definiu durante a instalação. Após inserir a senha correta, você estará conectado ao banco de dados.
- Crie um banco de dados: Agora você pode criar um banco de dados para o seu aplicativo de gerenciamento de notícias. No psql, execute o seguinte comando para criar um banco de dados chamado "gerenciamento_noticias":
```bash
CREATE DATABASE gerenciamento_noticias;
```
- Com essas etapas concluídas, você terá o PostgreSQL configurado e pronto para ser usado como banco de dados para o seu aplicativo de gerenciamento de notícias. Certifique-se de ler a documentação do PostgreSQL para obter mais informações sobre configuração avançada, segurança e outras funcionalidades oferecidas pelo sistema de gerenciamento de banco de dados.

Agora configure o arquivo .env com as informações do seu banco de dados. Lembre-se de antes criar uma tabela no seu banco!

```bash
database.default.hostname = localhost
database.default.database = seu_bd
database.default.username = postgres
database.default.password = sua_senha
database.default.DBDriver = Postgre
database.default.port = 5432
```

Com tudo configurado você pode rodar o comando a seguir para que as migrations do projeto criem seu banco de dados. 

OBS: Verifque se extensão intl do PHP está ativada.

```bash
php spark migrate
```

Pronto, agora é só rodar o projeto!

```bash
php spark serve
```

## Rotas

```
 GROUP: NEWS
 URL                 AÇÃO
/news               | Lista todas as notícias
/viewDetail/(:num)  | Visualizar
/create             | Cadastro
/store              | Persiste o cadastro no banco
/update/(:num)      | Persiste a atualização no banco
/delete/(:num)      | Deleta Tarefa
/edit/(:num)        | Edita
```

## O que fazer no sistema?

O projeto consiste em criar um aplicativo de gerenciamento de notícias usando PHP e PostgreSQL. O aplicativo permitirá que os usuários criem, visualizem, atualizem e excluam notícias. Cada notícia terá campos como título, conteúdo, autor e data de publicação.

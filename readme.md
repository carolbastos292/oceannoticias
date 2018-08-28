Projeto para concorrer a vaga de estágio WEB Samsung OCEAN.

Optei por utilizar o framework Laravel 5.3 e a biblioteca Materialize.

Estrutura do projeto

O projeto segue o modelo MVC

Na pasta app

- Http/Controller/Site/HomeController.php - paginação das noticias na página home se encontra no diretorio 
- Http/Controller/NoticiaController.php - foram criadas todas as funções para as manipulações das rotas, tratamentos das imagens, atualização, remoção, cadastro, edição e visualização dos dados
- Noticia.php - Model do projeto

Na pasta database

- /database/ - pasta com o banco de dados 
- comicsnews.sql - Banco a ser importado
- /migrations/2018_08_26_005625_create_noticias_table.php - Migrations são compostas pelas estruturas das tabelas do banco de dados e são como uma espécie de backup desta mesma estrutura

Na pasta public

- css - folhas de estilo do projeto
- js - scripts front-end do projeto
- img/noticias - Imagens das noticias cadastradas

Na pasta resources

- home.blade.php - página principal do projeto que mostra a listagem das noticias cadastradas
- views/noticias/_form.blade.php - Estrutura para os inputs do formulario de cadastro de noticias
- views/noticias/cadastrar.blade.php - página de cadastrar uma notícia
- views/noticias/visualizar.blade.php - página de visualizar uma notícia selecionada
- views/noticias/editar.blade - Pagina para atualizar dados cadastrados

Na pasta routes

- web.php - Arquivo php que se encontram as routas do projeto

Na pasta raíz
- .env - Arquivos que faz conexão com o Banco de Dados

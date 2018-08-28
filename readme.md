Projeto para concorrer a vaga de estágio web do OCEAN.

Estou utilizando os frameworks Laravel 5.3 e Materialize para o front-end.


Estrutura do projeto

O projeto segue o modelo MVC

A model se encontra no arquivo Noticia.php que se encontra dentro da pasta app

Todas as views se encontram nos diretorio resources/views, dentro da view criei uma pasta chamada layout que contem dois includes 
o rodape e o topo, criei eles pra não ter que repetir os códigos do topo e do footer em todas as páginas. 
Dentro da pasta noticias contem todos as página de cadastro, edição e visualização das notícias.
E dentro do diretório view contem a página home que mostra a listagem das noticias cadastradas.

Dentro do diretorio app/Http/NoticiaController.php foram criadas todas as funções para as manipulações das rotas, tratamentos das imagens, atualização, remoção, cadastro, edição e visualização dos dados.

A paginação das noticias na página home se encontra no diretorio Site/HomeController.php

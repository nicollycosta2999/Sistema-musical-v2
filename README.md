# 🎵 Sistema Musical

## Sobre o projeto

O Sistema Musical é um projeto desenvolvido com o objetivo de organizar informações sobre cantores e músicas em um único lugar. Nesta nova etapa, o foco foi melhorar o funcionamento do sistema, deixando de trabalhar apenas com a parte visual e implementando funcionalidades que permitem cadastrar, consultar, editar e excluir informações.

## Funcionalidades

O sistema permite trabalhar com o cadastro de cantores (artistas) e relacionar cada música ao seu respectivo artista.

Na parte das músicas, foram implementadas as seguintes funcionalidades:

- Cadastro de músicas, com título, álbum e gênero musical.
- Associação das músicas aos cantores cadastrados.
- Cadastro e armazenamento de letras de músicas.
- Inclusão de links do YouTube para acessar os vídeos.
- Adição de imagens para as capas dos álbuns.
- Edição das informações das músicas já cadastradas.
- Exclusão de músicas do banco de dados.
- Exibição das músicas relacionadas ao artista selecionado.

Também foram adicionadas validações para os links do YouTube e para as imagens enviadas, verificando o formato e o tamanho dos arquivos.

## Tecnologias utilizadas

- **HTML:** estrutura das páginas.
- **CSS:** estilização e organização visual.
- **PHP:** funcionamento do sistema, processamento dos formulários e comunicação com o banco de dados.
- **MySQL:** armazenamento das informações de artistas e músicas.
- **MySQL Workbench:** gerenciamento e visualização do banco de dados.

## Banco de dados

O projeto utiliza um banco de dados chamado `sistema_musical_v2`, com tabelas responsáveis por armazenar as informações do sistema, como artistas, músicas e usuários.

A tabela de músicas possui informações como título, álbum, gênero, letra, link do YouTube, imagem da capa e identificação do artista relacionado.

## Desenvolvimento

Nesta etapa do projeto, foram realizadas alterações principalmente na parte funcional. O objetivo foi fazer com que as informações cadastradas realmente fossem armazenadas no banco de dados e pudessem ser consultadas e modificadas posteriormente.

Também foram trabalhadas operações de cadastro, consulta, atualização e exclusão de dados (CRUD), além da utilização de relacionamentos entre tabelas.

## Objetivo

O objetivo do projeto é desenvolver um sistema musical funcional, que facilite a organização de cantores e músicas, permitindo armazenar informações importantes e gerenciar os dados de maneira simples e prática.

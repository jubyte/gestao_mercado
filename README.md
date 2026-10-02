# SISTEMA GESTÃO DE MERCADO

## Objetivo

O Sistema de Gestão de Produtos para um Mercado foi desenvolvido para auxiliar no controle dos produtos disponíveis no estoque. O sistema permite cadastrar, visualizar, editar e excluir produtos, mantendo suas informações armazenadas em um banco de dados MySQL.

## Tecnologias

O projeto foi desenvolvido utilizando PHP, MySQL, e HTML. Para a comunicação com o banco de dados foi utilizado PDO com Prepared Statements. O ambiente de desenvolvimento utiliza o XAMPP, e o projeto foi versionado com Git e GitHub.

## Requisitos

Para executar o sistema, é necessário ter:

- XAMPP
- PHP
- MySQL
- Navegador
- Visual Studio Code

## Instalação e configuração

Primeiramente, coloque a pasta do projeto dentro da pasta `htdocs` do XAMPP. Depois, abra o XAMPP e inicie o **Apache** e **MySQL**.

No phpMyAdmin, execute o arquivo `database/db.sql` para criar o banco de dados e a tabela necessários para o funcionamento do sistema.

A conexão com o banco de dados está configurada no arquivo `infra/conexao.php`. Caso necessário, as informações de acesso ao MySQL podem ser alteradas nesse arquivo.

Após a configuração, acesse o sistema pelo navegador através do endereço correspondente à pasta do projeto no `localhost`.

## Estrutura do banco de dados

O sistema utiliza o banco de dados `mercado`, que possui a tabela `produtos`. Cada produto possui um id, nome, categoria, descrição, preço, quantidade em estoque e data de validade.

## Principais funcionalidades

### Cadastro

Permite cadastrar novos produtos informando nome, categoria, descrição, preço, quantidade em estoque e data de validade.

### Visualização

A página inicial apresenta os produtos cadastrados em uma tabela, permitindo consultar suas informações de forma organizada.

### Edição

Permite selecionar um produto já cadastrado e alterar suas informações.

### Exclusão

Permite remover produtos cadastrados no sistema.

### Validação

O sistema realiza validações dos dados recebidos para evitar o cadastro de informações vazias ou inválidas.

### Tratamento de erros

O sistema possui tratamento básico de erros relacionados à conexão e às operações realizadas no banco de dados.

### Prepared Statements

As operações realizadas no banco de dados utilizam Prepared Statements por meio do PDO, evitando inserir diretamente os valores recebidos nas consultas SQL.

## Estrutura

```text
gestao_mercado/
│
├── database/
│   └── db.sql
│
├── docs/
│   ├── caso_de_uso.md
│   └── diagrama.png
│
├── infra/
│   └── conexao.php
│
├── public/
│   ├── cadastrar.php
│   ├── salvar.php
│   ├── editar.php
│   ├── atualizar.php
│   └── excluir.php
│
├── index.php
└── README.md
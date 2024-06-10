# Encurtador de Links

## Descrição
Um Sistema simples para encurtador links desenvolvido com Laravel 11 é SQLite.

<h2 align="center">Capturas de Telas</h2>

<p align="center">
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEg2pgGLhOAm9GU77WY7f4QD22woFq9XA0KwARRloYx7DbzGHwgfyfWDRUWxKQYq-dpVNiGooos5-vvRXhfZzFa6EFPpYdGtDLb4nWpvBFlBUfK5jBb_AT7YEqlSjbPj6C1UJVWPLH5okp3MD7yFCV0mLN5HZuNwxkEndE9jvRBQLRIG-rO8Q0MmbusVbpNx" width="800">
</p>

<p align="center">
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEiH7gbH9Ccqkt5Tz0d0CwDFKYrfHUbvhR3D-zZ_BEwMDZ-hxy3SnfUQOpC0ztNJQDYMNvtSZf7dklG8Hz0xAmBbZX2ya7t78FFxb84ykPGShLifXfNIUZDOkxanx4oCfbey1ClqJsKkWUJAVC7JAZ63Jq48StKkd_5LKztohVmCrnZv73tF-Hf9zY_lkX4F" width="800">
</p>

<p align="center">
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEiRSTPjO2OPJLjYh5KUoOAHcXyZbAsL_8_xusIzrWneZEX_PAsyIjeh-s5p-Xmk6gDksmygPYVJxdotS1PMV0RQnMfnINRQSsWgRzYfD9eu5uZ1wVHbUhgMRtKBrpU1dHhQeX1REPSkFxoz1R1WS7jBCtAGeuI5EeHlVP_5Jwt0w8FCpr4xsyUasVL6g3Bi" width="800">
</p>

<p align="center">
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEjl1DdUFw6mP01SiVVMdcPwf5YCeVlsUgzyWjni5hivzsiqcE8E1on6_2OvHn8YY-hwDTxsiRKBYMnHhgUvs9iLd_W--H6y5xFWs_H68v6h-MtjYDwNpyi9uE-ubopCA9Ud1qxky62oEWDBVpYji9fd4kILYHJxOG991l6IE4vDbcaMof-SiQY1vQCgBOKB" width="800">
</p>

<h2 align="center">Capturas de Tela Celular</h2>

<p align="center">
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEiGUWBqEog7MGzLP3UjbX5l0GdLkrgQ3PfyUPOShgVOYQfs74J6H2-l9PhjqaR7mzr8hRHrqAdUwmomHVt1maMXIDdYuahARCCjCHObZpYnb6CrK-SUMkAT6MCGy1YIZ4At_CfIfUz2Hcs-aEiljTF-X22HPZ4gNT02a3vxv6rc0uCfq_37gC9EsndFxkXo" width="800">
</p>

## Estrutura do Projeto
project-root/
├── public/
│ ├── css/
│ │ ├── bootstrap5.css
│ │ └── styles.css
│ ├── img/
│ │ ├── link.png
│ │ └── svg/
│ │ └── copy.svg
│ └── js/
│ └── clipboard.min.js
├── resources/
│ ├── views/
│ │ ├── layouts/
│ │ │ └── app.blade.php
│ │ └── welcome.blade.php
└── routes/
└── web.php

## Instalação

1. Clone o repositório

## Passo a passo para rodar o projeto

```sh
cd encurtador-de-links/
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Atualize essas variáveis de ambiente no arquivo .env
```dosini
APP_NAME="encurtador-de-links"

APP_URL=http://localhost
```

Criar arquivo do Banco SQLITE

Windows
```dosini
New-Item -Path .\bancoSQLITE\links.sqlite -ItemType File
```
Linux
```dosini
touch /bancoSQLITE/links.sqlite
```

O DB_DATABASE= tem que ter o caminho completo do arquivo no PC exemplo 
DB_DATABASE=C:/xampp/htdocs/encurtador-de-links/bancoSQLITE/links.sqlite
```dosini
DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
DB_DATABASE= o caminho completo do arquivo no PC bancoSQLITE/links.sqlite
# DB_USERNAME=root
# DB_PASSWORD=
```

Gere a chave da aplicação:
```sh
php artisan key:generate
```
Rode a migração para criar as tabelas no banco de dados:
```sh
php artisan migrate
```
Rode o seeder para pagar os dados das apis, e alimendar as tabelas do banco de dados:
```sh
php artisan db:seed
```
Inicie o servidor local da Aplicação:
```sh
php artisan serve
```

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver alguma sugestão de melhoria, por favor, abra uma issue ou envie um pull request.

## Créditos

- Desenvolvido por [João Marcos](https://links.jm7087.com)
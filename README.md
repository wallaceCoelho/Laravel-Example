<p align="center">
    <img width="800" src=".github/logo.png" title="Logo do projeto"><br />
    <img src="https://img.shields.io/maintenance/yes/2021?style=for-the-badge" title="Status do projeto">
    <img src="https://img.shields.io/github/workflow/status/ccuffs/template/ci.uffs.cc?label=Build&logo=github&logoColor=white&style=for-the-badge" title="Status do build">
</p>

# Título

Este projeto foi desenvolvido para praticar meu conhecimento sobre o Laravel e aplicar padrões de projetos e de arquitetura de software. O frontend não é o foco da aplicação, o projeto criado utiliza o método SPA(Single Page Application) como forma de renderização de views. 

* DDD + Injeção de Dependência
* Arquitetura Limpa

> **IMPORTANTE:** Material para fins acadêmicos e não para produção.

## ✨ Features

Aqui você pode colocar uma screenshot do produto resultante desse projeto. Descreva também suas features usando uma lista:

* Fácil integração;
* Poucas dependências;
* Fácil iserção de desenvolvedores ao projeto;
* Possui ótima documentação e testes;

## 🚀 Começando

### 1. Dependências

Para executar o projeto, você precisa ter o seguinte instalado:

- [Git](https://git-scm.com);
- [PHP](https://www.php.net/downloads);
- [Composer](https://getcomposer.org/download/);
- [MySQL](https://dev.mysql.com/downloads/);
- [NodeJS](https://nodejs.org/en/);
- [NPM](https://www.npmjs.com/package/npm);

Você precisa de várias extensões PHP instaladas também:

```
sudo apt install php-cli php-mbstring php-zip php-xml php-curl
```

### 2. Configuração

Feito a instalação das dependências, é necessário obter uma cópia do projeto. A forma recomendada é clonar o repositório para a sua máquina.

Para isso, rode:

```
git clone --recurse-submodules https://github.com/practice-uffs/template && cd template
```

Isso criará e trocará para a pasta `template` com o código do projeto.

#### 2.1 PHP

Instale as dependências do PHP usando o comando abaixo:

```
composer install
```

#### 2.2 Banco de Dados

O banco de dados usado no projeto foi o MySQL. Para criar uma base usando esse SGBD, rode:


Atualize o gerenciador de pacotes:
```
sudo apt update
```

Em seguida, instale o pacote:mysql-server
```
sudo apt install mysql-server
```

Verifique se o servidor está sendo executado usando o comando:systemctl start
```
sudo systemctl start mysql.service
```

#### 2.3 Node

Instale também as dependências do NodeJS executando:

```
npm install
```

#### 2.4 Laravel

Crie o arquivo `.env` a partir do arquivo `.env.example` gerado automaticamente pelo Laravel:

```
cp .env.example .env
```

Criação as tabelas do banco de dados com as migrações esquemas:

```
php artisan migrate
```

Por fim execute o comando abaixo para a geração da chave de autenticação da aplicação:

```
php artisan key:generate
```

Gere os recursos JavaScript e CSS:

```
npm run dev
```

>*DICA:* enquanto estiver desenvolvendo, rode `npm run watch` para manter os scripts javascript sendo gerados sob demanda quando alterados.

### 3. Utilizacão

#### 3.1 Rodando o projeto

Depois de seguir todos os passos de instalação, inicie o servidor do Laravel:

```
php artisan serve
```
Após isso a aplicação estará rodando na porta 8000 e poderá ser acessada em [localhost:8000](http://localhost:8000).


Veja o arquivo [ROADMAP.md](ROADMAP.md) para ter uma ideia de como o projeto deve evoluir.


## 🎫 Licença

Esse projeto é licenciado nos termos da licença open-source [MIT](https://choosealicense.com/licenses/mit) e está disponível de graça.

## 🧪 Links úteis

Abaixo está uma lista de links interessantes e projetos similares:

* [Clean Architecture: A Craftsman Guide to Software Structure and Design by Robert C. Martin](https://www.oreilly.com/library/view/clean-architecture-a/9780134494272/)

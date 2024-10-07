# Digimon Search Application

Este é um projeto web que utiliza a **API de Digimon** para pesquisar Digimons por nome, nível e tipo. A aplicação também permite que usuários autenticados favoritem seus Digimons preferidos e acessem seus favoritos posteriormente. O projeto utiliza **PHP**, **MySQL** e **Bootstrap 5.3.3** para fornecer uma interface de usuário moderna e funcional.

## Funcionalidades

- **Pesquisa de Digimons**: Busque Digimons por nome, nível e tipo.
- **Autenticação de Usuários**: Usuários podem se registrar e fazer login.
- **Favoritar Digimons**: Usuários logados podem favoritar Digimons e visualizá-los em uma lista personalizada.
- **Filtros Avançados de Pesquisa**: Pesquise Digimons por múltiplos atributos como nome, nível e tipo.
- **Paginação**: Resultados de pesquisa são exibidos com paginação para facilitar a navegação.
- **Cache**: Cache local para melhorar a performance e reduzir chamadas à API.
- **Sistema de Proteção de Rotas**: Algumas funcionalidades só estão disponíveis para usuários autenticados.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação para a lógica do servidor.
- **MySQL**: Banco de dados relacional para armazenar usuários e favoritos.
- **Bootstrap 5.3.3**: Framework CSS para criação de uma interface responsiva e moderna.
- **API de Digimon**: Usada para buscar dados sobre Digimons [https://digimon-api.vercel.app/](https://digimon-api.vercel.app/).
- **JavaScript**: Para melhorar a interatividade e usabilidade do sistema.
- **HTML/CSS**: Para a estrutura e o estilo da aplicação.

## Requisitos

Antes de instalar e rodar o projeto, certifique-se de ter as seguintes ferramentas instaladas:

- **PHP 7.4+**
- **MySQL** ou **MariaDB**
- **Servidor Apache** (ou outro servidor web que suporte PHP, como XAMPP ou MAMP)
- **Composer** (para gerenciar pacotes PHP, opcional)

## Passo a Passo de Instalação

### 1. Clone o Repositório

Clone este repositório para o seu ambiente local usando o Git:

```bash
git clone https://github.com/AndersonC96/Digimon.git
```

### 2. Configuração do Banco de Dados

#### 1. Crie um banco de dados MySQL chamado digimon_db:

```bash
CREATE DATABASE digimon;
```

#### 2. Importe o arquivo SQL incluído no repositório para criar as tabelas necessárias:

```bash
mysql -u root -p digimon < path/to/digimon.sql
```

Ou execute diretamente no cliente MySQL:

```bash
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE favoritos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    digimon_name VARCHAR(100) NOT NULL,
    data_adicionado TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES usuarios(id)
);
```

### 3. Configuração do Servidor Web

#### 1. Coloque o projeto no diretório raiz do seu servidor web (por exemplo, htdocs no XAMPP).

#### 2. No arquivo config/config.php, configure as informações de conexão ao banco de dados:

```bash
<?php
// Configurações de conexão ao banco de dados
$host = 'localhost';    // Endereço do servidor do banco de dados
$dbname = 'digimon_db';  // Nome do banco de dados
$username = 'root';      // Nome de usuário do banco de dados
$password = '';          // Senha do banco de dados (coloque a sua senha aqui)

// Criar uma conexão com o banco de dados usando MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar se a conexão falhou
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}

// Configurações da API
$apiConfig = [
    'digimon_api_url' => 'https://digimon-api.vercel.app/api/digimon',
];
```

### 4. Configuração do Cache

```bash
mkdir cache
chmod 777 cache
```

### 5. Acessando o Projeto

#### 1. No seu navegador, acesse o projeto através do servidor web local, como por exemplo:

```bash
http://localhost/digimon-search/public/index.php
```

### 6. Registro e Login

#### 1. No menu de navegação, registre-se clicando em "Registrar".

#### 2. Após o registro, faça login para acessar as funcionalidades como favoritar Digimons.

### 7. Estrutura de Diretórios

```bash
/digimon-search
│
├── /public               # Arquivos acessíveis ao público (HTML, CSS, JS, PHP principal)
│   ├── index.php         # Página principal
│   ├── register.php      # Página de registro de usuários
│   ├── login.php         # Página de login de usuários
│   ├── favoritos.php     # Página de favoritos dos usuários
│   ├── logout.php        # Página de logout de usuários
│   ├── style.css         # Arquivo de estilos CSS
│   └── /cache            # Diretório de cache (para armazenar respostas da API)
│
├── /src                  # Código fonte (PHP classes, funções, lógica de negócio)
│   ├── search.php        # Lógica de pesquisa e filtros
│
├── /templates            # Arquivos de template (páginas HTML ou PHP usadas para exibição)
│   ├── header.php        # Cabeçalho comum
│   ├── footer.php        # Rodapé comum
│
├── /config               # Arquivos de configuração
│   └── config.php        # Configurações de banco de dados e API
│
├── /tests                # Testes automatizados (PHPUnit, etc.)
├── /cache                # Diretório para cache de dados da API
├── README.md             # Instruções do projeto
└── digimon_db.sql        # Arquivo SQL para criação do banco de dados
```

### 8. Funcionalidades do Sistema

#### 1. Pesquisa de Digimons

Na página principal, os usuários podem buscar Digimons utilizando os seguintes filtros:

- Nome do Digimon: Pesquisa direta pelo nome.
- Nível do Digimon: Selecione entre níveis como "Rookie", "Champion", "Mega", etc.
- Tipo do Digimon: Filtre por tipo como "Vaccine", "Virus", "Data", etc.

#### 2. Registro e Login

- Usuários podem se registrar com nome de usuário, e-mail e senha.
- Depois de logados, os usuários têm acesso a funcionalidades exclusivas, como favoritar Digimons.

#### 3. Favoritar Digimons

- Usuários logados podem favoritar Digimons diretamente nos resultados da pesquisa.
- A lista de favoritos pode ser acessada através da página de "Favoritos".

#### 4. Proteção de Rotas

- As páginas como Favoritos são protegidas e só podem ser acessadas por usuários autenticados.

#### 5. Melhorias e Funcionalidades Futuras

- Integração de testes automatizados com PHPUnit.
- Paginação aprimorada para melhorar a navegação em grandes volumes de resultados.
- Melhorias na interface do usuário com animações e transições mais suaves.

#### 6. Problemas Conhecidos

- Dependendo da instabilidade da API, as respostas podem demorar a carregar.
- O sistema de cache ainda pode ser refinado para suportar mais endpoints.
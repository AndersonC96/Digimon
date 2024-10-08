# Digimon Search Application

<p align="center">
  <img src="https://img.shields.io/badge/PHP-7.4%2B-blue" alt="PHP Version">
  <img src="https://img.shields.io/badge/Bootstrap-5.3.3-blueviolet" alt="Bootstrap Version">
  <img src="https://img.shields.io/badge/MySQL-Compatible-orange" alt="MySQL Compatibility">
  <img src="https://img.shields.io/badge/Status-Em%20Desenvolvimento-green" alt="Status">
</p>

## 🌟 O que é o Digimon Search Application?

O **Digimon Search Application** é um projeto web que permite pesquisar Digimons por nome, nível e tipo usando a **API de Digimon**. Além disso, oferece funcionalidades como autenticação de usuários e a capacidade de favoritar Digimons, proporcionando uma experiência personalizada e interativa. O projeto utiliza **PHP**, **MySQL** e **Bootstrap 5.3.3** para criar uma interface de usuário moderna e responsiva.

## ✨ Funcionalidades

- **🔍 Pesquisa de Digimons**: Busca por nome, nível e tipo.
- **🔑 Autenticação de Usuários**: Registro e login para acessar funcionalidades exclusivas.
- **⭐ Favoritar Digimons**: Usuários logados podem favoritar Digimons e acessá-los posteriormente.
- **🎯 Filtros Avançados**: Filtragem refinada com base em múltiplos critérios.
- **📄 Paginação**: Exibição paginada para facilitar a navegação.
- **⚡ Cache Local**: Redução de chamadas à API, melhorando a performance.
- **🔒 Proteção de Rotas**: Apenas usuários autenticados acessam determinadas funcionalidades.

## 🚀 Getting Started

### 🛠️ Instalação

Siga os passos abaixo para configurar o projeto localmente:

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/AndersonC96/Digimon.git
    ```

2. **Configuração do Banco de Dados**:

- Crie um banco de dados MySQL chamado `digimon`:

    ```bash
        CREATE DATABASE digimon;
    ```

- Importe o arquivo SQL incluído no repositório:

    ```bash
        mysql -u root -p digimon < path/to/digimon.sql
    ```

3. **Configuração do Servidor**:

- Coloque o projeto no diretório raiz do seu servidor web (por exemplo, `htdocs` no XAMPP).
- Edite o arquivo `config/config`.php com suas credenciais de banco de dados:

    ```bash
        $host = 'localhost';
        $dbname = 'digimon';
        $username = 'root';
        $password = '';
    ```

4. **Configuração de Cache**:

    ```bash
        mkdir cache
        chmod 777 cache
    ```

5. **Acesse o projeto no navegador**:

    ```bash
        http://localhost/digimon/public/index.php
    ```

## 🤔 Como Usar

1. Pesquisa de Digimons: Utilize a barra de busca para filtrar por nome, nível ou tipo.

2. Registro e Login: Crie uma conta para acessar a funcionalidade de favoritos.

3. Favoritar Digimons: Adicione Digimons à sua lista de favoritos clicando no ícone de estrela nos resultados de pesquisa.

4. Acesse Favoritos: Veja seus Digimons favoritos na página dedicada.

## 📁 Estrutura de Diretórios

    ```bash
        /digimon
        │
        ├── /public               # Arquivos públicos (HTML, CSS, JS)
        │   ├── index.php         # Página inicial
        │   ├── register.php      # Registro de usuários
        │   ├── login.php         # Login de usuários
        │   ├── favoritos.php     # Página de favoritos
        │   ├── style.css         # Estilos CSS
        │   └── /cache            # Diretório para cache da API
        │
        ├── /src                  # Código-fonte principal
        │   ├── search.php        # Lógica de pesquisa
        │
        ├── /templates            # Templates HTML/PHP
        │   ├── header.php        # Cabeçalho
        │   ├── footer.php        # Rodapé
        │
        ├── /config               # Arquivos de configuração
        │   └── config.php        # Configurações do banco de dados e API
        │
        ├── /tests                # Testes automatizados
        ├── README.md             # Instruções do projeto
        └── digimon_db.sql        # Script SQL para criação do banco de dados
    ```

## 🛡️ Funcionalidades de Segurança

- Proteção de Rotas: Apenas usuários autenticados podem acessar certas áreas como a lista de favoritos.
- Criptografia de Senhas: As senhas dos usuários são armazenadas com criptografia segura.

## 📝 Melhorias Futuras

- Integração de testes com PHPUnit.
- Interface mais dinâmica com animações.
- Suporte para endpoints adicionais na API de Digimon.
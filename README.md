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
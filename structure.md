/Digimon
│
├── /public               # Arquivos acessíveis ao público (HTML, CSS, JS, PHP principal)
│   ├── index.php         # Arquivo de entrada principal
│   ├── register.php      # Página de registro de usuários
│   ├── login.php         # Página de login de usuários
│   ├── favoritos.php     # Página de favoritos dos usuários
│   └── style.css         # Estilos CSS
│
├── /src                  # Código fonte (PHP classes, funções, lógica de negócio)
│   ├── Api.php           # Classe para lidar com as chamadas de API
│   └── SearchService.php  # Classe de lógica de busca
│
├── /templates            # Arquivos de template (páginas HTML ou PHP usadas para exibição)
│   ├── header.php        # Cabeçalho comum
│   ├── footer.php        # Rodapé comum
│
├── /config               # Arquivos de configuração (API keys, configurações gerais)
│   └── config.php        # Arquivo de configuração do banco de dados
│
├── /tests                # Testes automatizados (PHPUnit, etc.)
└── README.md             # Arquivo de documentação
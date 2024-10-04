/Digimon
│
├── /public               # Arquivos acessíveis ao público (HTML, CSS, JS, PHP principal)
│   ├── index.php         # Arquivo de entrada principal
│   ├── style.css         # Estilos CSS
│   └── script.js         # Scripts de JavaScript (se houver)
│
├── /src                  # Código fonte (PHP classes, funções, lógica de negócio)
│   ├── Api.php           # Classe para lidar com as chamadas de API
│   ├── SearchService.php  # Classe de lógica de busca
│   └── Helpers.php       # Funções utilitárias
│
├── /templates            # Arquivos de template (páginas HTML ou PHP usadas para exibição)
│   ├── header.php        # Cabeçalho comum
│   ├── footer.php        # Rodapé comum
│   └── result_template.php # Template para exibir resultados
│
├── /config               # Arquivos de configuração (API keys, configurações gerais)
│   └── config.php        # Arquivo de configuração
│
├── /tests                # Testes automatizados (PHPUnit, etc.)
│   └── ApiTest.php       # Testes para verificar a API
│
├── /assets               # Imagens, ícones e outros recursos estáticos
│   └── digimon.png       # Exemplo de arquivo de imagem
│
└── README.md             # Arquivo de documentação
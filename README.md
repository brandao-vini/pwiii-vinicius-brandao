# pwiii-vinicius-brandao
Aulas de Programação Web III com o Prof João Siles


# Guia de Criação de um Projeto Básico com Laravel

Este documento fornece um guia passo a passo para criar e executar um novo projeto Laravel a partir do zero em um ambiente de desenvolvimento local. O objetivo é ter uma instalação limpa e funcional do framework rodando em poucos minutos.

## Pré-requisitos

Antes de iniciar, certifique-se de que você possui as seguintes ferramentas instaladas e configuradas em seu sistema:

-   **PHP** (versão 8.2 ou superior)
    
-   **Composer** (gerenciador de dependências para PHP)
    

Você pode verificar se eles estão instalados corretamente executando os seguintes comandos no seu terminal:

## Passo a Passo da Instalação

Siga os passos abaixo na ordem para garantir uma instalação correta.

### 1. Criar o Projeto via Composer

O Composer é a maneira recomendada de iniciar um novo projeto Laravel. Ele irá baixar o framework e todas as suas dependências.

Abra seu terminal na pasta onde deseja criar seu projeto e execute o comando:

> **Nota:** Substitua `nome-do-projeto` pelo nome que você deseja dar à pasta do seu projeto. O Composer criará essa pasta para você.

Aguarde a conclusão do processo. Ele fará o download de todos os pacotes necessários.

### 2. Acessar o Diretório do Projeto

Uma vez que a instalação esteja completa, você precisa entrar na pasta do projeto que foi criada.

**Importante:** Todos os comandos a seguir devem ser executados de dentro do diretório raiz do seu projeto.

### 3. Iniciar o Servidor de Desenvolvimento

O Laravel inclui o Artisan, uma poderosa ferramenta de linha de comando. Uma de suas funções é iniciar um servidor de desenvolvimento local para que você possa visualizar seu projeto sem a necessidade de configurar um servidor web como Apache ou Nginx.

Execute o seguinte comando:

Após executar o comando, o terminal exibirá uma mensagem indicando que o servidor está em execução:

### 4. Acessar o Projeto no Navegador

Abra seu navegador de internet e navegue até o endereço fornecido pelo Artisan:

Você deverá ver a página de boas-vindas padrão do Laravel. Isso confirma que seu projeto foi instalado e está rodando com sucesso.

> Para parar o servidor de desenvolvimento, volte à janela do terminal e pressione `Ctrl + C`.

## Comandos Essenciais Pós-Instalação

### Gerar a Chave da Aplicação

Normalmente, o comando `composer create-project` já cuida disso. No entanto, se você clonar um projeto de um repositório ou criar o arquivo `.env` manualmente, precisará gerar uma chave de segurança. Esta chave é vital para a criptografia de sessões e outros dados seguros.

## Próximos Passos

Parabéns! Seu ambiente Laravel básico está funcionando. A partir daqui, você pode começar a construir sua aplicação. Os próximos passos comuns incluem:

-   **Configurar o Banco de Dados**: Editar o arquivo `.env` para conectar sua aplicação a um banco de dados (MySQL, PostgreSQL, SQLite, etc.).
    
-   **Criar Migrations**: Definir a estrutura de suas tabelas do banco de dados com o comando `php artisan make:migration`.
    
-   **Criar Models**: Criar classes Eloquent para interagir com suas tabelas usando `php artisan make:model`.
    
-   **Definir Rotas**: Editar `routes/web.php` para criar as URLs da sua aplicação.
    
-   **Criar Controllers**: Organizar sua lógica de negócio com o comando `php artisan make:controller`.
    
-   **Desenvolver Views**: Criar a interface do usuário com os arquivos de template do Blade em `resources/views`.
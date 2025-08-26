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
---------------------------------------------------------------------------------------------------------------






----------

# Documentação: Como Usar SQLite no VS Code

Este guia passo a passo irá ajudá-lo a configurar e usar um banco de dados SQLite diretamente do Visual Studio Code, utilizando uma extensão popular e eficiente.

## O que é SQLite?

**SQLite** é um sistema de gerenciamento de banco de dados leve, sem servidor e de código aberto. Ele é contido em um único arquivo, o que o torna ideal para desenvolvimento local, prototipagem, aplicações móveis e pequenas aplicações web.

## Pré-requisitos

-   Visual Studio Code instalado em seu computador.
    

----------

### Passo 1: Instalar a Extensão SQLite

A primeira coisa que você precisa fazer é instalar uma extensão que permite interagir com arquivos SQLite no VS Code.

1.  Abra o **Visual Studio Code**.
    
2.  Vá para a barra de extensões no lado esquerdo (ícone de quatro quadrados) ou pressione `Ctrl+Shift+X`.
    
3.  Na barra de pesquisa, digite `SQLite`.
    
4.  Procure pela extensão `SQLite` (geralmente a mais popular e com mais downloads, publicada por **Alexcvzz** ou similar).
    
5.  Clique no botão **Instalar**.
    

### Passo 2: Criar ou Abrir um Banco de Dados

Com a extensão instalada, você pode criar ou abrir arquivos de banco de dados SQLite.

-   **Para criar um novo banco de dados:** Crie um novo arquivo em seu projeto com a extensão `.db` ou `.sqlite`. Por exemplo: `meu_banco.db`.
    
-   **Para abrir um banco de dados existente:** Abra a pasta do seu projeto que contém o arquivo de banco de dados.
    

A extensão irá reconhecer automaticamente o arquivo `.db` no seu projeto. Um novo ícone do SQLite aparecerá na barra lateral.

### Passo 3: Conectar-se ao Banco de Dados

Para começar a trabalhar, você precisa "abrir" o banco de dados na extensão.

1.  Na barra lateral do VS Code, clique no ícone do **Explorador de Bancos de Dados SQLite**.
    
2.  Na seção "Databases", clique no botão **"Open Database"** (um ícone de pasta com uma seta).
    
3.  Selecione o arquivo `.db` que você criou ou abriu no passo anterior.
    
4.  O banco de dados agora aparecerá na lista, pronto para ser usado.
    

### Passo 4: Executar Consultas SQL

Agora que você está conectado, pode criar tabelas, inserir dados e realizar consultas.

1.  Clique com o botão direito no seu banco de dados na seção "Databases" e selecione **"New Query"**.
    
2.  Uma nova aba de editor de texto será aberta. É aqui que você escreverá seus comandos SQL.
    

#### **Exemplos de Comandos SQL**

Você pode copiar e colar os seguintes exemplos para começar. Para executar um comando, **selecione o código** e pressione `Ctrl+Shift+Q` ou clique com o botão direito e selecione `Run Query`. O resultado aparecerá em um painel abaixo.

**1. Criar uma Tabela:**

SQL

```
CREATE TABLE usuarios (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    email TEXT UNIQUE,
    idade INTEGER
);

```

**2. Inserir Dados:**

SQL

```
INSERT INTO usuarios (nome, email, idade) VALUES ('João Silva', 'joao.silva@email.com', 30);
INSERT INTO usuarios (nome, email, idade) VALUES ('Maria Souza', 'maria.souza@email.com', 25);

```

**3. Consultar Todos os Dados:**

SQL

```
SELECT * FROM usuarios;

```

O resultado será exibido em uma tabela no painel de resultados.

**4. Atualizar um Registro:**

SQL

```
UPDATE usuarios SET idade = 31 WHERE nome = 'João Silva';

```

**5. Deletar um Registro:**

SQL

```
DELETE FROM usuarios WHERE nome = 'Maria Souza';

```

### Passo 5: Visualizar e Gerenciar Dados

A extensão oferece ferramentas visuais para explorar seu banco de dados.

-   **Explorador de Banco de Dados:** No painel lateral, você pode expandir as tabelas (`> tabelas > usuarios`) para ver as colunas, índices e o esquema de forma rápida.
    
-   **Visualização de Tabela:** Clique com o botão direito em uma tabela e selecione **"Show Table"** para abrir uma visualização completa dos dados da tabela em uma nova aba.
    

----------

### Dicas e Solução de Problemas

-   **Arquivo do Banco de Dados Não é Encontrado:** Certifique-se de que a pasta do seu projeto que contém o arquivo `.db` está aberta no VS Code (menu `Arquivo > Abrir Pasta`).
    
-   **Comandos Não Funcionam:** Verifique se você está executando a consulta na aba de editor de consulta correta (aberta pela extensão).
    
-   **Atalho de Teclado:** Se `Ctrl+Shift+Q` não funcionar, procure o comando `SQLite: Run Query` na paleta de comandos (`Ctrl+Shift+P`).
    
-   **Extensões Alternativas:** Se a extensão principal não atender às suas necessidades, outras como `SQLite Editor` ou `SQLite Viewer` podem ser boas alternativas.
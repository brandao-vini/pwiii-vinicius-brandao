# pwiii-vinicius-brandao
Aulas de Programação Web III com o Prof João Siles




----------

# Guia Passo a Passo para Rodar um Projeto Laravel Existente

Este guia detalha os comandos e procedimentos necessários para configurar e executar um projeto Laravel já existente em seu ambiente de desenvolvimento local.

### **Pré-requisitos**

Antes de começar, garanta que os seguintes softwares estão instalados em sua máquina:

-   **PHP:** Verifique a versão necessária no arquivo `composer.json` do seu projeto.
    
-   **Composer:** Gerenciador de dependências para PHP.
    
-   **Node.js e npm (ou yarn):** Para gerenciar as dependências de front-end.
    
-   **Servidor de Banco de Dados:** Como MySQL, PostgreSQL ou SQLite.
    
-   **Git:** Caso o projeto esteja em um repositório.
    

----------

### **1. Obtenha o Código do Projeto**

Clone o repositório Git para a sua máquina ou navegue até a pasta do projeto, caso já a possua.

Bash

```
# Clone o repositório
git clone <URL_DO_SEU_REPOSITORIO>

# Acesse o diretório do projeto
cd <NOME_DO_DIRETORIO_DO_PROJETO>

```

### **2. Instale as Dependências do PHP**

Use o Composer para instalar todas as bibliotecas de back-end necessárias para o projeto.

Bash

```
composer install

```

### **3. Crie o Arquivo de Ambiente (.env)**

Copie o arquivo de exemplo `.env.example` para criar o seu arquivo de configuração de ambiente local.

Bash

```
cp .env.example .env

```

### **4. Gere a Chave da Aplicação**

Toda aplicação Laravel precisa de uma chave de segurança única. Gere-a com o comando Artisan abaixo.

Bash

```
php artisan key:generate

```

### **5. Configure o Banco de Dados**

Abra o arquivo `.env` em um editor de texto e atualize as variáveis de conexão com o banco de dados com as suas credenciais locais.

Ini, TOML

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco_de_dados
DB_USERNAME=seu_usuario_do_banco
DB_PASSWORD=sua_senha_do_banco

```

**Importante:** Certifique-se de que o banco de dados (`nome_do_seu_banco_de_dados`) já foi criado em seu servidor.

### **6. Execute as Migrations**

Crie a estrutura de tabelas no banco de dados executando as migrations do projeto.

Bash

```
php artisan migrate

```

Opcionalmente, para popular o banco de dados com dados de teste (se houver _seeders_), execute:

Bash

```
php artisan db:seed

```

### **7. Instale as Dependências de Front-end**

Instale os pacotes JavaScript e CSS necessários para o projeto.

-   **Usando npm:**
    
    Bash
    
    ```
    npm install
    
    ```
    
-   **Usando yarn:**
    
    Bash
    
    ```
    yarn install
    
    ```
    

### **8. Compile os Assets**

Compile os arquivos de front-end (JavaScript, CSS, etc.) para que o navegador possa utilizá-los.

-   **Para desenvolvimento (com hot-reload):**
    
    Bash
    
    ```
    npm run dev
    
    ```
    
-   **Para produção (arquivos minificados):**
    
    Bash
    
    ```
    npm run build
    
    ```
    

### **9. Inicie o Servidor Local**

Finalmente, inicie o servidor de desenvolvimento do Laravel.

Bash

```
php artisan serve
```




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
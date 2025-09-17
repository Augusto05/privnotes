![PHP](https://img.shields.io/badge/PHP-7.x-blue) ![MySQL](https://img.shields.io/badge/MySQL-5.x-blue) ![JavaScript](https://img.shields.io/badge/JavaScript-ES6-yellow)

# PrivNotes – Sistema de Notas em PHP, JavaScript e MySQL

PrivNotes é um projeto de conclusão do curso de Desenvolvimento de Sistemas - SENAC.  
O foco principal foi criar um CRUD completo em PHP, com suporte a JavaScript para interações dinâmicas, e um banco de dados MySQL funcional. A estilização foi feita em HTML5 e CSS3.

---

## 📋 Funcionalidades

- Sistema de cadastro e login de usuários  
- Gerenciamento de sessão e cookies  
- Criação, edição e exclusão de notas  
- Armazenamento temporário de rascunhos via sessão  
- Modo noturno com memória de preferência (localStorage + JS)  
- Banco de dados normalizado com tabelas (cópia disponível em exemplo.sql)

---

## 🛠 Tecnologias

- PHP 7.x ou superior  
- MySQL 5.x ou superior  
- JavaScript (ES6)  
- HTML5 e CSS3

---

## 🚀 Passos de Instalação

1. Clone o repositório:  
   ```bash
   git clone https://github.com/Augusto05/privnotes.git
   cd privnotes
   ```

2. Instale o XAMPP  
   - Baixe em https://www.apachefriends.org/pt_br/index.html  
   - Abra o Painel de Controle do XAMPP

3. Inicie os módulos Apache e MySQL no Painel de Controle

4. Copie o projeto para a pasta `htdocs`  
   - Windows: `C:\xampp\htdocs\privnotes`  
   - macOS/Linux: `/Applications/XAMPP/htdocs/privnotes`

5. Crie o banco de dados no phpMyAdmin  
   - Acesse http://localhost/phpmyadmin  
   - Clique em **Novo** e crie um banco chamado `privnotes_db`

6. Importe o arquivo de estrutura SQL  
   - Ainda no phpMyAdmin, selecione o banco `privnotes_db`  
   - Vá em **Importar**, escolha `privnotes/exemplo.sql` e clique em **Executar**

7. Ajuste as credenciais de conexão em `config.php`:  
   ```php
   <?php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'privnotes_db');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   ```
   - Salve as alterações

8. Acesse a aplicação no navegador:  
   ```
   http://localhost/privnotes
   ```


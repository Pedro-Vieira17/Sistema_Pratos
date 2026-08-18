# Sistema de Gerenciamento de Pratos e Usuários

Aplicação web desenvolvida em PHP e MySQL para controle e gerenciamento dos pratos cadastrados por colaboradores de um restaurante.

# Tecnologias Utilizadas

* **Linguagem:** PHP
* **Banco de Dados:** MySQL
* **Front-end:** HTML5 e CSS3
* **Ambiente Local:** XAMPP (Apache + MySQL)

# Como Executar o Projeto com XAMPP

# 1. Clonar ou Baixar o Projeto
Coloque a pasta inteira do projeto dentro do diretório `htdocs` da sua instalação do XAMPP:
* Caminho padrão: `C:\xampp\htdocs\SISTEMA_PRATOS`

# 2. Iniciar os Serviços no XAMPP
1. Abra o **XAMPP Control Panel**.
2. Clique em **Start** nos módulos **Apache** e **MySQL**.

# 3. Configurar o Banco de Dados
1. No navegador, acesse o **phpMyAdmin**: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Vá até a aba **SQL**.
3. Copie todo o conteúdo do arquivo `database/db.sql` localizado no projeto, cole no campo do phpMyAdmin e clique em **Executar** (Go).
4. Verifique no arquivo `infra/conexao.php` se a senha do seu MySQL no XAMPP está vazia `""` ou se está definida como `"root"`, ajustando conforme o seu ambiente:
   ```php
   $senha = "";
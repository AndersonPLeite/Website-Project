# Projeto Bolsacripto
## Website de notícias sobre o mercado financeiro.
![Bolsacripto](./imagens/logo-BC-rmvBG.png)


<div style="display: inline_block"><br/>
  <img  height="100px" width="100px" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg" />
  <img height="100px" width="100px" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg" />
  <img  height="100px" width="100px" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-plain.svg" />
  <img height="100px" width="100px" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original-wordmark.svg" />
  <img  height="100px" width="100px" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />
</div>
          
## Pré-requisitos
<h2>phpMyAdmin</h2>
<a>https://www.phpmyadmin.net/downloads/</a>
## Tecnologias utilizadas  

<p>Crie um banco de dados no phpMyAdmin</p>
<p>CREATE DATABASE  "db_name";
USE "db_name";
</p>
<p>
Crie as demais tabelas usando sql do diretório "database"
CREATE TABLE pessoa (
codpessoa SERIAL PRIMARY KEY,
nome VARCHAR(250) NOT NULL,
email VARCHAR(250) UNIQUE NOT NULL,
cpf VARCHAR(11)NOT NULL,
senha VARCHAR(250) NOT NULL,
imagem VARCHAR(250) DEFAULT 'foto.png' NOT NULL,
status BOOLEAN DEFAULT TRUE,
reg_date date NOT NULL default CURRENT_DATE
);
</p>        
          
Link to project documentation on figma.

https://www.figma.com/design/KrIpnWiDHqPkafO6EPVxzS/BolsaCripto?node-id=7-2&t=WBZcICm8VPJZUMGW-1

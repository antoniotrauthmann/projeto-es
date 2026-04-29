# 🌿 Expresso Verde

Projeto de desenvolvimento de um site de compra e venda de artigos de jardinagem, criado para a disciplina de Engenharia de Software.

## 🎓 Universidade Federal do Tocantins

* **Curso de Ciência da Computação** 
* **Engenharia de Software 2026/01** 
* **Professor Edeilson Milhomem da Silva**

## 👥 Integrantes do Time

* Hiago Freitas Jatoba
* Antonio Andrade Trauthman
* Joao Igor dos Santos Nascimento
* Zacaro Cerqueira Barros
* Gabriel Henrique Coldebella de Souza

---

## ⛵ Navegação

* [📌 Descrição do Projeto](#-descrição-do-projeto)

---

## 📌 Descrição do Projeto

O Expresso Verde é uma plataforma web voltada para a compra e venda de artigos de jardinagem, como plantas, ferramentas, sementes e acessórios.
A proposta do sistema é conectar vendedores e compradores de forma prática, oferecendo uma experiência simples, intuitiva e eficiente para usuários interessados em jardinagem.

## 🎯 Objetivo

O objetivo principal do projeto é aplicar conceitos de Engenharia de Software no desenvolvimento de um sistema web completo, incluindo:

* Levantamento de requisitos
* Modelagem do sistema
* Desenvolvimento front-end e back-end
* Testes e validação
* Documentação do projeto

## ⚙️ Requisitos Planejados

* Cadastro e login de usuários
* Sistema de compra e venda
* Cadastro de produtos de jardinagem
* Busca de produtos
* Página de detalhes do produto
* Interface responsiva
* Últimas compras
* Feed de compartilhamento da comunidade (texto e imagens)

## 🏗️ Arquitetura do Sistema (MVC)

O projeto foi desenvolvido utilizando o padrão de arquitetura **MVC (Model-View-Controller)**, garantindo a separação de responsabilidades e facilitando a manutenção do código

### 📂 Estrutura de Pastas

* **`Model`**: Contém as classes responsáveis pela lógica de dados e comunicação com o banco de dados
* **`View`**: Contém as páginas que o usuário interage, como o cabeçalho, catálogo e a comunidade
* **`Controller`**: Atua como o intermediário, recebendo as requisições da View e acionando o Model


---

## 🗓️ Planejamento de Sprints

Sprint 1: Gerenciamento de Dados e Estrutura Base
* US01 – Listagem de Produtos: Implementação da visualização básica de itens na tela de catálogo
* US02 – Estrutura de Banco: Criação do script do banco de dados em SQL para persistência das informações
* US03 - Espaço para comunidade: implementação do feed de compartilhamento da comunidade

Sprint 2: Registro e Segurança
* US04 Interface Dinâmica: Ajuste do cabeçalho para exibir botões de "Entrar", "Perfil" ou "Sair" conforme o status de login
* US05 Trava de Segurança na Comunidade: Garantia de que apenas o autor de um post possui permissão para excluí-lo
* US06 Sistema de Login: Garantia que o usuário possa acessar seu perfil, visualizar dados.

---

## 📊 Histórias de usuário

* US01 – Listagem de Produtos:
1. Como cliente, eu quero visualizar uma lista de produtos no catálogo para que eu possa conhecer as opções disponíveis e escolher o que desejo comprar. A tela deve carregar os produtos cadastrados no banco de dados. Cada item deve exibir nome, preço e uma imagem ilustrativa.

* US02 - Espaço para comunidade:
1. Como usuário engajado, eu quero acessar um feed de compartilhamento para que eu possa ver as postagens e interações de outros membros da comunidade.Exibição de uma timeline com postagens em ordem cronológica inversa. Cada post deve mostrar o nome do autor e o conteúdo (texto/imagem). Interface intuitiva e integrada ao restante do site.

* US03 Interface Dinâmica:
1. Como visitante ou usuário logado, eu quero ver um cabeçalho que se adapte ao meu status para que eu tenha acesso rápido às funções de login ou ao meu perfil. Se não logado: exibir botões "Entrar" e "Cadastrar". Se logado: ocultar botões de entrada e exibir "Perfil" e "Sair" (Logout). A transição de estado deve ocorrer sem a necessidade de recarregar a página manualmente.

* US04 Trava de Segurança na Comunidade:
1. Como autor de um post, eu quero que apenas eu possa excluir minhas publicações para que minha autonomia seja respeitada e terceiros não apaguem meu conteúdo.

* US05 Sistema de Login:
1. Como usuário cadastrado, eu quero realizar login e acessar meu perfil para que eu possa gerenciar meus dados pessoais e ter uma experiência personalizada. O sistema deve validar e-mail e senha cadastrados. Após o login, o usuário deve ser redirecionado para a home ou para sua página de perfil. A página de perfil deve exibir os dados básicos do usuário (nome, e-mail, data de cadastro).

---

## 📋 Requisitos do Sistema

### Requisitos Funcionais (RF)

### RF01 Cadastro do Usuário / Login do Usuário

* O sistema deve permitir o cadastro e login de usuários

### RF02  Navegação no Catálogo / filtragem

* O sistema deve permitir a visualização de produtos de jardinagem
* O sistema deve exibir os catalagos dos itens disponiveis para compra e permitir navegar por categorias
* O sistema deve permitir busca por produtos e lojas especificas
* O sistema deve exibir informações dos produtos e das lojas parceiras

### RF04 Comunidade 

* O sistema deve permitir que usuários logados postem na comunidade
* O sistema deve impedir a exclusão de posts por usuários que não sejam seus autores

## RF06 regra de nogacios

* O sistema deve impedir que usuarios que não são vendedores não possam publicar vendas 

### RF09 carrinho de compras 
* O sistema deve permitir adicionar os produtos ao carrinho de compras  
* O sistema deve permitir que o usuario faça alterações como remover ou alterar o quantidade do item no carrinho 
* O sistema deve calcular automaticamente o valor total da compra

### RF10 Gerenciamento de Perfil
* O sistema deve permitir que usuários visualizem seus dados de perfil
* O sistema deve permitir que usuários editem suas informações pessoais
* O sistema deve permitir que usuários alterem suas senhas

## RRF11 Historio de compras 
* O sistema deve exibir os itens que o clinte adiquiriu 
* O sistema deve exbir a data/horario que o cliente comprou e recebeu o pedido 

## RF12 Gerenciamento de vendas 
* O sistema deve permitir que os vendedores adicionem novos produtos ao catálogo 
* O sistema deve permitir que os vendedores editem as informações dos produtos 
* O sistema deve permitir que os vendedores removam os seus produtos 
* O sistema deve permitir que os vendedores categorizem seus produtos 



### Requisitos Não Funcionais (RNF)

## RNF01 (Segurança)

* As sessões devem ser protegidas via PHP `session_start()`.

## RNF02 (Usabilidade)

* A interface deve utilizar o framework CSS FontAwesome para ícones intuitivos

## RNF03 (Manutenibilidade)

* O sistema deve seguir o padrão de arquitetura MVC, garantindo a separação clara entre a lógica de negocio, persistência de dados e interface

## RNF04 (Portabilidade)

* O software deve ser capaz de rodar em difirentes ambientes de servidor local 

## RNF05 (Desempenho)

* rapidez em eficiencia na resposta das ações de usuario 

---

## 🎥 Vídeo de Apresentação

Assista ao vídeo do projeto:
🔗 [Link do vídeo completo](https://drive.google.com/file/d/17KipqXUz7V8dM-nMRL_1pzxKuK85Oxnu/view?usp=sharing)


---

## 📌 Considerações Finais

Este projeto foi desenvolvido com fins acadêmicos, com o objetivo de consolidar conhecimentos em Engenharia de Software


---

[ Grafico de rede do projeto ]

<img width="751" height="471" alt="grafico de rede" src="https://github.com/user-attachments/assets/54562a0a-fca7-4fcb-8efc-d41c2986d961" />

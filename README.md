# BichoChiq Petshop 🐾

Este projeto foi desenvolvido, unindo um site  em **PHP, CSS e HTML**, um aplicativo mobile em **Kotlin** e uma API REST em **Spring Boot**. 🚀 Ambos, site e aplicativo, sincronizam-se com a API, proporcionando uma gestão dos sistemas.

## Sistemas 🌍

1. **Site (PHP, CSS, HTML):** Uma plataforma para clientes e funcionários, focada no gerenciamento intuitivo do catálogo de produtos. 🛒

2. **Aplicativo (Kotlin):** Desenvolvido para dispositivos móveis, o aplicativo oferece conveniência aos usuários, permitindo que explorem e comprem produtos de qualquer lugar. 📱

3. **API REST (Spring Boot):** A espinha dorsal do sistema, fornece serviços para o aplicativo, permitindo operações CRUD. Utiliza o **MongoDB** para armazenar e recuperar dados de produtos de maneira eficiente. 🔄

## Tecnologias Utilizadas 🛠️

- **Site:**
  - PHP
  - CSS
  - HTML

- **Aplicativo:**
  - Kotlin

- **API REST:**
  - Spring Boot
  - Java
  - MongoDB (Banco de Dados)

## Requisitos de Configuração ⚙️

1. **API REST:**
   - Antes de iniciar o site e o aplicativo, certifique-se de executar a API REST. A API cria automaticamente o banco de dados MongoDB, caso ainda não exista.

2. **Configuração do Banco de Dados:**
   - Certifique-se de configurar as informações de conexão corretas para o MongoDB no arquivo de configuração da API.

## Configuração do Banco de Dados MongoDB 🏦

O BichoChiq Petshop utiliza o MongoDB, um banco de dados não relacional. Caso não tenha o MongoDB instalado, siga as instruções no [site oficial](https://docs.mongodb.com/manual/installation/) para instalação.

## Executando a API no IntelliJ IDEA 🚀

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/WolneiACordeiro/bicho-chiq-petshop.git
   ## Executando a API no IntelliJ IDEA 🚀

2. **Abra o Projeto no IntelliJ:**
   - Abra o IntelliJ IDEA e selecione "File" > "Open".
   - Navegue até o diretório do projeto e selecione o arquivo de projeto (geralmente com a extensão `.iml`).

3. **Configure o MongoDB:**
   - Certifique-se de que o MongoDB esteja em execução localmente ou ajuste as configurações no arquivo `application.properties`.

4. **Execute a Aplicação:**
   - Abra a classe principal (`PetshopApiApplication`) no IntelliJ.
   - Clique com o botão direito e escolha "Run" para iniciar a aplicação.

A API estará disponível em [http://localhost:8080](http://localhost:8080).


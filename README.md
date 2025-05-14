# **emporio_alegria**
É um aplicativo de gestão de supermercados.

Nele, o funcionário pode cadastrar clientes, fornecedores, produtos, bem como vendas realizadas no mercado.

Este projeto estará conectado a um Banco de Dados do tipo SQL.

E será feito no front-end com JS, CSS e HTML.
O Backend ficará com o PHP.

## **Backlog do projeto**

- Criar README DO PROJETO
- Criar páginas no FIGMA
  - inicial
  - vendas
  - produtos
  - clientes
  - fornecedores
- Criar página inicial, que direciona para clientes, produtos, fornecedores, vendas.
- Criar campos para vendas
  - Campos:
    - id_venda
    - id_funcionario
    - id_produto
    - id_cliente ? null
    - quatidade_produto
- Criar página produtos
  - Criar campos para produtos
    - Campos:
      - id_produto
      - descrição
      - estoque_minimo
      - estoque_maximo
      - valor_unitario
      - quantidade
- Criar página clientes 
  - Criar campos para clientes
    - Campos:
      - id_cliente
      -   nome
      -   endereço
      -   telefone
      -   email
      -   cidade
- Criar página fornecedores
  - Criar campos para fornecedores:
    - id_fornecedor
    - nome_empresa
    - email
    - telefone
- Criar Banco de Dados MYSQL chamado alegria.
  - Criar tabelas vendas, produtos, clientes e fornecedores.
- Criar sistema de Login
  - Acessar a página inicial da área logada.
  - cadastrar novos usuário
- validações de formulários com JS
  -   venda
  -   produtos
  -   clientes
  -   fornecedores
  -   login
 - Criação dos styles do site com CSS
   -   venda
   -   produtos
   -   clientes
   -   fornecedores
   -   login
  - Responsividade CSS
- padrão de código:
  -   tabela SQL - MAIÚSCULO e plura [CLIENTES]
  -   formulário html - minúsculo e plural [produtos.php]
  -   input html - minúsculo e singular [email, nome, telefone]
  -   campos da tabela SQL - MAIÚSCULO e singular [NOME, TELEFONE, EMAIL]
  -   classes CSS = singular e primeira maiúscula juntando por hífen - [Menu-Left]
  -   id CSS = singular e minúsculo juntado por hífen - [produto-right]

## **Linguagens utilizadas**

HTML, CSS, JS, PHP e MySQL

![HTML](https://github.com/user-attachments/assets/20b136b3-2645-45b3-9612-3836a690591f)
![CSS](https://github.com/user-attachments/assets/dfded212-4fd1-4d96-8f3c-136f3cea2791)
)
![JS](https://github.com/user-attachments/assets/aa3a15dc-1352-4d37-bcee-2d85cf2ad1f6)
)
![PHP](https://github.com/user-attachments/assets/43dd2955-8954-452d-b04e-96abfb2870fa)
)
![MySQL](https://github.com/user-attachments/assets/02398dd2-6d5f-478c-b545-62f2c52fd8ab)


## **Como ficará o projeto**

![Página inicial do site](./assets/img/imagens_projeto/index.png)
![Página Produtos](./assets/img/imagens_projeto/produtos.png)
![Página Clientes](./assets/img/imagens_projeto/clientes.png)
![Página Fornecedores](./assets/img/imagens_projeto/fornecedores.png)
![Página Vendas](./assets/img/imagens_projeto/vendas.png)
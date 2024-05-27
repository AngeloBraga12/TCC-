<?php
  include_once '../frontend/import/aside.php';
  include_once '../frontend/import/header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Cadastro</title>
</head>


<body class="body-centralizada">
  
  <main id="Cadastro">
    <div class="card-1-C">
      <h3 style="padding-left: 25px;">Configurações</h3>
      <p>Principal > Configurações</p>
      <section>
        <a class="links-C" href="#">Perfil</a>
        <a class="links-C" href="#">Aplicação</a>
        <a class="links-C" href="#">Segurança</a>
        <a class="links-C" href="#">Atividade</a>
        <a class="links-C" href="#">Metodo de pagamento</a>
        <a class="links-C" href="#">API</a>
      </section>
    </div>

    <h3 class="h3-title-C" style="grid-area: 2/3 1/2;">User Profile</h3>
    <div class="box-C card-2-C">
      <form action="">
        <label for="Name">Full Name</label>
        <input type="text" name="name" id="name" />
        <img src="/YouJob/img/perfil.png" alt="usuario" />
        <button type="submit" class="button-C">Salvar</button>
      </form>
    </div>


    <h3 class="h3-title-C" style="grid-area: 2/3 2/3;">Atualização do Perfil</h3>
    <div class="box-C card-3-C">
      <form action="">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
        <label for="password">password</label>
        <input type="password" name="senha" id="password" />
        <button type="submit" class="button-C">Salvar</button>
      </form>
    </div>

    <h3 class="h3-title-C" style="grid-area: 4/5 1/3;">Informações pessoais</h3>
    <div class="card-4-C">
      <form action="">
        <label for="name">Nome completo</label>
        <label for="cpf">CPF</label>  
        <input type="text" name="name" id="name-box-3">
        <input type="number" name="cpf" id="cpf">

        <label for="Num-tel">Número de Telefone</label>
        <label for="estado">Estado</label>
        <input type="tel" name="num=tel" id="num-tel">
        <input type="text" name="estado" id="estado">

        <label for="cidade">Cidade</label>
        <label for="bairro">Bairro</label>
        <input type="text" name="cidade" id="cidade">
        <input type="text" name="bairro" id="bairro">

        <button type="submit" class="button-C">Cadastrar</button>
      </form>
    </div>
  </main>
</body>

</html>
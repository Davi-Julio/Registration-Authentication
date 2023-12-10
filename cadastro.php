<?php

include_once "Templates/header.php";

?>



<div class="container-form">
  <form class="form2" action="" method="post">
    <label>Faça Seu Cadastro</label>
    <div id="form2" class="row">
      <div class="col">
        <input required type="text" class="form-control" name="nameCadastro" placeholder="Name" aria-label="First name">
      </div>
      <div class="col">
        <input required type="email" class="form-control" name="emaiCadastro" placeholder="Email"
          aria-label="Last name">
      </div>
      </ <div class="row">
      <div class="col">
        <input required type="password" class="form-control" name="passwordCadastro" placeholder="Password"
          aria-label="First name">
      </div>
      <div class="col">
        <input required type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password"
          aria-label="Last name">
      </div>
    </div>

    <input type="submit" id="btnCadastro" value="Cadastrar >" name="cadastro">
  </form>

  <!--form2-->
</div>
<!--container form2-->
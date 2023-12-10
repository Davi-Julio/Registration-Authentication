<?php


include_once "Model/config.php";


/*Validação Para Conferir se os dados do Login do Usúario estão Cadastrados No banco de dados
 caso esteja ele será redirecionado para a Página so Site, Caso não esteja ele voltara a página de Login
**/

if (isset($_POST['login'])) {
  $nameLogin = $_POST['nameLogin'];
  $passwordLogin = $_POST['passwordLogin'];

  $sql = "SELECT * FROM usuarios3 WHERE name = '$nameLogin' AND password = '$passwordLogin'";
  $result = $mysqli->query($sql);


  $limite_caracteres = 8;

  // Validação Caracteres do Campo Password
  if (strlen($passwordLogin) < $limite_caracteres) {
?>
<span class="mssg_Password">
  <p>A quantidade de caracteres no campo de senha é insuficiente!</p>
</span>
<?php
  }

  // Validação Dos Campos de Login
  else if ($result->num_rows > 0) {
    header("Location: loginSucess.php");
  } else {
  ?>
<span class="mssg_Password">
  <p>Usúario Não Cadastrado!</p>
</span>
<?php
  }
}


/* Lógica para efetuar o Cadastro de Usúarios No Banco de dados */


if (isset($_POST['cadastro'])) {
  $nameCadastro = $_POST['nameCadastro'];
  $emaiCadastro = $_POST['emaiCadastro'];
  $passwordCadastro = $_POST['passwordCadastro'];
  $confirmPassword = $_POST['confirmPassword'];


  $sql = "SELECT * FROM usuarios3 WHERE name = '$nameCadastro' OR email = '$emaiCadastro' OR password = '$passwordCadastro' OR confirmpassword = '$confirmPassword'";
  $result2 = $mysqli->query($sql);

  $limite_caracteres2 = 8;

  // Validação de caracteres nos campos de senha
  if (strlen($passwordCadastro) < $limite_caracteres2) {
  ?>
<span class="mssg_Password">
  <p>A quantidade de caracteres no campo de senha é insuficiente!</p>
</span>
<?php
    // Validação para conferir se existe Usúarios cadastrados no banco de dados com os mesmos dados preenchidos no form
  } else if ($result2->num_rows > 0) {
  ?>
<span class="mssg_Password">
  <p>Usúario Já Cadastrado!</p>
</span>
<?php
    // Validação para ver se as senhas são identicas
  } else if ($passwordCadastro === $confirmPassword) {
    $sql = "INSERT INTO usuarios3 (name, email, password, confirmpassword) VALUES ('$nameCadastro','$emaiCadastro','$passwordCadastro', '$confirmPassword')";
    $result3 = $mysqli->query($sql);
  ?>
<span class="mssg_Password">
  <p>Cadastrado Feito Com Sucesso! Agora Faça seu Login!</p>
</span>
<?php
    // Validação para ver se as senhas não são identicas
  } else if ($passwordCadastro != $confirmPassword) {
  ?>
<span class="mssg_Password">
  <p>Senhas Diferentes!</p>
</span>
<?php

  }
}

?>
<?php

include_once "url/url.php";
include_once "Model/config.php";
include_once "Controller/controller.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration&Authentication</title>
  <link rel="stylesheet" href="<?=$BASE_URL?>css/style.css">
  <link rel="stylesheet" href="<?=$BASE_URL?>css/media.css">
  <link rel="short icon" href="Icons//Login.gif">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
@import url("https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Oswald&family=Raleway:ital,wght@0,400;0,700;1,300&family=Roboto+Condensed:ital@1&display=swap");

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Raleway", sans-serif;
  background-color: rgb(34, 34, 34);
  color: #fff;
}


/*Header*/

.header {
  display: flex;
  flex-direction: row;
  align-content: center;
  justify-content: space-around;
  padding: 2% 0;
}

.titulo-header {
  text-align: center;
}

.nav ol {
  display: flex;
  align-items: center;
  gap: 50px;
}

.nav ol li {
  list-style-type: none;
}

.nav ol li a {
  text-decoration: none;
  padding: 10px 12px;
  color: #fff;
}

.nav ol li:nth-child(2) {
  border: 2px solid rgb(132, 14, 201);
  padding: 10px 12px;
  border-radius: 10px;
}

/*Tela de Login*/

.main {
  padding: 1% 2%;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-around;
}

.conteudo-main {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  max-width: 550px;
}

.titulo-main>h1 {
  text-transform: uppercase;
}

.span-text {
  color: rgb(132, 14, 201);
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

#form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

#form input {
  width: 40vw;
  height: 6vh;
}

#btnLogin {
  width: 20vw;
  height: 6vh;
  background-color: rgb(132, 14, 201);
  color: #fff;
  font-weight: 800;
  margin: 20px 0px;
  border: none;
  border-radius: 5px;
}

.figure-main img {
  width: 30vw;
  border-radius: 20px;
}

/*Tela de Cadastro*/

.form2 {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.form2>label {
  border-bottom: 1px solid rgb(132, 14, 201);
  font-size: 2rem;
  text-transform: uppercase;
}

#form2 {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 50px 0px;
}

#form2 input {
  margin-bottom: 15px;
  width: 40vw;
  height: 6vh;
}

#btnCadastro {
  width: 30vw;
  height: 6vh;
  background-color: rgb(132, 14, 201);
  color: #fff;
  font-weight: 800;
  border: none;
  border-radius: 5px;
}

@media screen and (min-width: 766px) and (max-width: 1115px) {
  .conteudo-main {
    text-align: center;
  }
}

@media screen and (min-width: 481px) and (max-width: 767px) {
  .titulo-header h1 {
    font-size: 27px;
  }

  .nav ol li a {
    font-size: 16px;
  }

  .nav ol li:nth-child(2) {
    border: 2px solid rgb(132, 14, 201);
    padding: 10px 10px;
    border-radius: 10px;
  }

  .main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .conteudo-main {
    margin: 50px 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 450px;
    text-align: center;
  }

  #form input {
    width: 55vw;
    height: 6vh;
  }

  /*Tela de Cadastro*/

  .form2>label {
    font-size: 1rem;
  }

  #form2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 70px 0px;
  }

  #form2 input {
    margin-bottom: 20px;
    width: 65vw;
    height: 6vh;
  }

  #btnCadastro {
    width: 35vw;
    height: 6vh;
    background-color: rgb(132, 14, 201);
    color: #fff;
    font-weight: 800;
    border: none;
    border-radius: 5px;
  }
}

@media (max-width: 481px) {
  .header {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .titulo-header h1 {
    font-size: 25px;
  }

  .nav {
    margin: 20px 0px;
  }

  .nav ol li a {
    font-size: 10px;
  }

  .nav ol li:nth-child(2) {
    border: 2px solid rgb(132, 14, 201);
    padding: 5px 5px;
    border-radius: 10px;
  }

  .main {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .conteudo-main {
    margin: 50px 0px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 250px;
    text-align: center;
  }

  .titulo-main h1 {
    font-size: 25px;
  }

  .titulo-main p {
    font-size: 14px;
  }

  #form input {
    width: 70vw;
    height: 5vh;
    font-size: 13px;
  }

  #btnLogin {
    width: 35vw;
    height: 5vh;
  }

  /*Tela de Cadastro*/

  .form2>label {
    font-size: 1rem;
  }

  #form2 {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin: 30px 0px;
  }

  #form2 input {
    margin-bottom: 20px;
    width: 60vw;
    height: 5vh;
    font-size: 10px;
  }

  #btnCadastro {
    width: 40vw;
    height: 4vh;
    background-color: rgb(132, 14, 201);
    color: #fff;
    font-weight: 800;
    border: none;
    border-radius: 5px;
    font-size: 13px;
  }
}
</style>

<body>

  <header class="header">
    <div class="titulo-header">
      <h1>Marketing <br> Create</h1>
    </div>
    <!--titulo header-->

    <nav class="nav">
      <ol>
        <li><a href="<?=$BASE_URL?>/">Home</a></li>
        <li><a href="<?=$BASE_URL?>cadastro.php">Não Possui Conta?</a></li>
      </ol>
    </nav>
    <!--nav-->

  </header>
  <!--header-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>

</body>

</html>
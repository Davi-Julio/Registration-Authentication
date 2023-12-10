<?php

include_once "Templates/header.php";

?>

<!--Tela de Login-->


<main class="main">
  <div class="conteudo-main">
    <div class="titulo-main">
      <h1>Faça Seu Login <br> <span class="span-text">Marketing Wolrd</span></h1>
      <p>Não possui cadastro em nosso site? Não se preocupe, basta clicar no link acima e realizar seu cadastro!</p>
    </div>
    <!--titulo-main-->

    <form class="form" action="" method="post">
      <div id="form" class="row g-3">
        <div class="col">
          <input required type="text" class="form-control" name="nameLogin" placeholder="Name" aria-label="First name">
        </div>
        <div class="col">
          <input required type="password" name="passwordLogin" class="form-control" placeholder="Password"
            aria-label="Last name">
        </div>
      </div>
      <input type="submit" id="btnLogin" name="login" value="Login >">
    </form>
    <!--form-->

  </div>
  <!--conteudo-main-->


  <figure class="figure-main">
    <img src="Icons//Login.gif" alt="">
  </figure>
  <!---figure-->

</main>
<!--main-->
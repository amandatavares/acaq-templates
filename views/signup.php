<!DOCTYPE html>
<html lang="en">

<?php include '_conf/head.php'; ?>

<body>
  <div class="container-fluid">
    <div class="bar-header">
      <div class="logo-bar">
      </div>
    </div>
    <div class="logo-sign">
      <img class="img-responsive" src="http://placehold.it/300x100">
    </div>
    <div class="box-sign">
      <form class="" action="index.html" method="post">
        <label for="name">Nome completo</label>
        <input type="text" id="name" value="">
        <label for="email">Digite seu E-mail</label>
        <input type="email" id="email" value="">
        <label for="user">Crie um nome de usuário</label>
        <input type="text" name="name" value="">
        <label for="pass">Crie uma senha</label>
        <input type="password" name="name" value="">
        <small>Ao inscrever-se você concorda com os <a href="#">Termos de Uso</a> e a <a href="#">Política de Privacidade</a>.</small>
        <button class="btn btn-login" type="submit" name="signup">Criar conta</button>
      </form>
    </div>
  </div>

  <?php include '_conf/scripts.php'; ?>

</body>
</html>

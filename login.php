<!DOCTYPE html>
<?php
session_start();
?>
<?php
  if (isset($_POST['registro'])) {
  //  print_r($_POST['nome']);
  //  print_r('<br>');
  //  print_r($_POST['email']);
  //  print_r('<br>');
  //  print_r($_POST['senha']);
  include_once('conexao.php');

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];

  $result = mysqli_query($mysqli, "INSERT INTO login (email, senha , membro_id) VALUES ('$email', '$senha',  '2')");
  $busca = $result = mysqli_query($mysqli, "SELECT id FROM login WHERE email = '$email'");
  $login = $busca->fetch_assoc();
  $login_id = $login['id'];
  $result = mysqli_query($mysqli, "INSERT INTO cliente (nome, login_id) VALUES ('$nome', '$login_id')");
  header('location:index.php');
  }
 ?>
 <?php
   if (isset($_POST['logar'])) {
   //  print_r($_POST['nome']);
   //  print_r('<br>');
   //  print_r($_POST['email']);
   //  print_r('<br>');
   //  print_r($_POST['senha']);
   include_once('conexao.php');

   $email = $_POST['emaillogin'];
   $senha = $_POST['senhalogin'];

   $_SESSION['email'] = $email;


  $busca = $result = mysqli_query($mysqli, "SELECT membro_id FROM login WHERE email = '$email' AND senha = '$senha' ");
  $login = $busca->fetch_assoc();

  if ($login['membro_id'] == 2) {
    header('location:clientearea.php');
  }
  elseif ($login['membro_id'] == 1) {
   header('location:adminarea.php');
  }

   }
  ?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <a href="index.php"><img src="assets/img/seta.png" class="seta"></a>
                <h2 class="title title-primary">Bem-vindo de novo!</h2>
                <p class="description description-primary">Se ja tem uma conta</p>
                <p class="description description-primary">Clique no botão abaixo para entrar</p>
                <button id="signin" class="btn btn-primary">Entrar</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Criar Conta</h2>
                <div class="social-media">

                </div><!-- social media -->
                <form action="login.php" method="POST" class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input type="text" name="nome" placeholder="Nome">
                    </label>

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="email" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senha" placeholder="Senha">
                    </label>


                    <input type="submit" name="registro" placeholder="Criar Conta "class="btn btn-second">
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        <div class="content second-content">
            <div class="first-column">
                <a href="index.php"><img src="assets/img/seta.png" class="seta"></a>
                <h2 class="title title-primary">Bem-vindo!</h2>
                <p class="description description-primary">Não possui uma conta?</p>
                <p class="description description-primary">Clique no botão abaixo para criar</p>
                <button id="signup" class="btn btn-primary">Criar Conta</button>
            </div>
            <div class="second-column">
                <h2 class="title title-second">Entrar</h2>
                <div class="social-media">
                </div><!-- social media -->
                <form action="login.php" method="POST" class="form">

                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" name="emaillogin" placeholder="Email">
                    </label>

                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" name="senhalogin" placeholder="Senha">
                    </label>

                    <a class="password" href="#">Esqueceu a senha?</a>
                    <input type="submit" name="logar" class="btn btn-second">
                </form>
            </div><!-- second column -->
        </div><!-- second-content -->
    </div>
    <script src="js/app.js"></script>
</body>
</html>

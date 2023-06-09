<?php 
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {


    if(strlen($_POST['email']) == 0){
      echo "Preencha seu Email";
    } else if(strlen($_POST['senha']) == 0){
      echo "Preencha sua senha";
    } else {

      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);

      $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
      $sql_query =  $mysqli->query($sql_code) or die("Falha na excução do código SQL" . $mysqli->error);
    
      $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

      $usuario = $sql_query->fetch_assoc();

      if(!isset($_SESSION)){
        session_start();
      }

      $_SESSION['id'] = $usuario['id'];
      $_SESSION['name'] = $usuario['id'];

      header("Location: ../index.html");

      } else {
        echo "Falha ao logar! Email ou Senha incorreto";
      }

    }

}

?>  

<!DOCTYPE html>
<html lang="pt-br">
  <head>  

    <title>Área de Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Páginas CSS/login.css">

</head>
  
      <body>
      <div class="text-login">
        <b>Área de Login</b>
      </div>

        <section class="area-login">
          <div class="login">
           <div>
           
            <img class="logo-login" src="../Imagens/DOE MAIS.png">
           </div>

           <form action="" method="POST">
              <input type="text" name="email" placeholder="E-mail" autofocus>
              <input type="password" name="senha" placeholder="*********">
              <input type="submit" value="Entrar">
            </form>
       <p class="text-cont">Ainda não tem uma conta?<a href="cadastrar.php">Criar conta</a></p>

   </div>
  </section>

 </body>
</html>

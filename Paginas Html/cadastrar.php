<?php
include('conexao.php');

if(isset($_POST['Cadastrar'])) {
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $result = mysqli_query($mysqli, "INSERT INTO usuarios(email, senha) VALUES ('$email', '$senha')");
}


?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>  

    <title>Área de Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../Páginas CSS/cadastrar.css">

</head>

<body>

        <section class="area-cadastro">
          <div class="cadastro">
           <div>
            <img class="logo-cadastro" src="../Imagens/DOE MAIS.png">
           </div>

           <form action="cadastrar.php" method="POST">
              <input type="text" name="email" placeholder="E-mail" autofocus>
              <input type="password" name="senha" placeholder="*********">
              <input type="submit" value="Cadastrar">
            </form>
       <p class="text-cont">Já tem uma conta criada?<a href="index.php">Logar</a></p>

   </div>

  </section>

</body>
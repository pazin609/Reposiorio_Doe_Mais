<?php 
session_start();
include_once('../lib/includes.php');
include_once('pags/login.php')

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
<br>
  <div class="content">
    <div class="row">
      <?php if(isset($_SESSION['usuarioUsuario'])){?>
      <div class="col-sm-3" class="menu-principal">
        <ul>
          <li class="title"><a>Publicações</a></li>
            <li class="sub"><a href="../admin/pags/publicar.php">Publicar</a></li>
            <li class="sub"><a href="../admin/pags/gerenciar-posts.php">Gerenciar Publicações</a></li>

          <li class="menu"><a href="pags/perfil.php">Editar perfil</a></li>
          <li class="menu"><a href="pags/sair.php">Sair</a></li>
        </ul>
      </div>
      
    <?php }?>

      <div class="<?php if(!isset($_SESSION['usuarioID'])){?>col-sm-5 offset-md-4<?php }else{?>col-sm-9<?php }?>">
        <?php echo carrega_pagina($con, $data, true);?>
      </div>
    </div>
  </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>

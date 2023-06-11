<div class="well well-sm">
 <?php 

    $seleciona = mysqli_query("SELECT * FROM posts ORDER BY id DESC");
    $conta = mysqli_num_rows($seleciona);


    if($conta <= 0){
        echo "<code> Nenhuma postagem cadastrada no banco de dados!";
    } else {
        while($row = mysqli_fetch_array($seleciona)){

          $id = $row['id'];
          $titulo = $row['titulo'];
          $descricao = $row['descricao'];
          $foto = $row['foto'];
          $data = $row['data'];
          $hora = $row['hora'];
          $postador = $row['postador'];

          $sql = "SELECT * FROM  usuarios WHERE usuario = '$postador'";
          $query = mysqli_query($conecta, $sql);
          $linha = mysqli_fetch_assoc($query);
     
  ?>

  <?php }} ?>
  
</div>
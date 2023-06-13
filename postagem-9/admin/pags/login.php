<?php
include_once "../../lib/includes.php";

	if(isset($_POST['env']) && $_POST['env'] == "log"){
		if($_POST['usuario'] && $_POST['senha']){
			$usuario = addslashes($_POST['usuario']);
			$senha = addslashes($_POST['senha']);

			$sql = $con->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
			$sql->bind_param("ss", $usuario, $senha);
			$sql->execute();
			$get = $sql->get_result();
			$total = $get->num_rows;
			$dados = $get->fetch_assoc();

			if($total > 0){
				$_SESSION['usuarioID'] = $dados['id'];
				$_SESSION['usuarioUsuario'] = $dados['usuario'];
				$_SESSION['usuarioSenha'] = $dados['senha'];


				header("Location: index.php");

			}else{
				echo "<div class='alert alert-danger'>Usuário ou senha inválido.</div>";
			}
		}else{
			echo "<div class='alert alert-danger'>Preencha todos os campos</div>";
		}
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="../../css/style.css">

</head>
<body>
	<!-- Bootstrap CSS -->
	<div class="form">
		<div class="admin-form">
			<div class="admin-form-title">Logue-se</div>
			<div class="admin-form-body">
				<form method="POST">
					<input type="text" name="usuario" class="form-control" placeholder="Usuário"><br>
					<input type="password" name="senha" class="form-control" placeholder="**********"><br>
					<input type="submit" value="Entrar" class="btn-outline-primary">
					<input type="hidden" name="env" value="log">
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>

    
<?php

	function atualizaVisitas($con, $idPost, $totalVisitas){
		$visitasAtualizadas = ($totalVisitas) +1;

		$query = $con->prepare("UPDATE posts SET visitas = ? WHERE id = ?");
		$query->bind_param("ss", $visitasAtualizadas, $idPost);
		$query->execute();
		if($query->affected_rows > 0){
			return true;
		}else{
			return false;
		}
	}

	function curtir($con, $idPost, $totalCurtidas){
		$curtidasAtualizadas = ($totalCurtidas) +1;

		$query = $con->prepare("UPDATE posts SET curtidas = ? WHERE id = ?");
		$query->bind_param("ss", $curtidasAtualizadas, $idPost);
		$query->execute();
		if($query->affected_rows > 0){
			echo "<script>window.history.back(-1);</script>";
		}else{
			echo "<script>window.history.back(-1);</script>";
		}
	}
?>
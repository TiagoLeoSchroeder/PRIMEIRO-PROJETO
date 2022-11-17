<?php
	include('conexao.php');
	
	$ref = filter_input(INPUT_GET, 'codigo');
	$consulta = $pdo->prepare("SELECT * FROM usuario WHERE pk_usuario = :pk");
	$consulta -> bindValue(":id", $ref);
	$consulta -> execute();
	
	foreach($consulta as $mostra):
	endforeach;

	$quantidade_avisos = strip_tags($mostra['contagem_avisos_usuario']);
	$status = 1;
	$aviso = 1;
	$contagem = 0;
	
	$alterar = $pdo->prepare("UPDATE usuario SET status_usuario = :s, aviso_usuario = :a, contagem_avisos_usuario = :c, WHERE pk_usuario = :pk");
		$alterar -> bindValue(':s', $status);
		$alterar -> bindValue(':a', $aviso);
		$alterar -> bindValue(':c', $contagem);
		$alterar -> bindValue(':pk', $ref);
		$alterar -> execute();
		
		if($alterar):
			echo '<script>alert("Usuário Notificado e Desbloqueado!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	
?>
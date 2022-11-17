<?php
	include('conexao.php');
	
	$ref = filter_input(INPUT_GET, 'codigo');
	$consulta = $pdo->prepare("SELECT * FROM si_usuarios WHERE usuarios_id = :id");
	$consulta -> bindValue(":id", $ref);
	$consulta -> execute();
	
	foreach($consulta as $mostra):
	endforeach;

	$quantidade_avisos = strip_tags($mostra['usuarios_contagem_avisos']);
	$status = 1;
	$aviso = 1;
	$contagem = 0;
	
	$alterar = $pdo->prepare("UPDATE si_usuarios SET usuarios_status = :s, usuarios_aviso = :a, usuarios_contagem_avisos = :c, data = :d WHERE usuarios_id = :id");
		$alterar -> bindValue(':s', $status);
		$alterar -> bindValue(':a', $aviso);
		$alterar -> bindValue(':d', '0000-00-00');
		$alterar -> bindValue(':c', $contagem);
		$alterar -> bindValue(':id', $ref);
		$alterar -> execute();
		
		if($alterar):
			echo '<script>alert("Usuário Notificado e Desbloqueado!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	
?>
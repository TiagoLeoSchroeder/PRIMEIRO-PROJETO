<?php
	include('conexao.php');
	
	$ref = filter_input(INPUT_GET, 'codigo');
	$consulta = $pdo->prepare("SELECT * FROM usuario WHERE pk_usuario = :pk");
	$consulta -> bindValue(":pk", $ref);
	$consulta -> execute();
	
	foreach($consulta as $mostra):
	endforeach;
	
	$quantidade_avisos = strip_tags($mostra['contagem_avisos_usuario']);
	$status = 1;
	$avisos = $quantidade_avisos + 1;
	
	if($quantidade_avisos == 3):
		$status = 0;
		$aviso = 2;
		$data = date('Y-m-d', strtotime('+10 days'));
		$alterar = $pdo->prepare("UPDATE usuario SET status_usuario = :s, aviso_usuario = :a, data = :d WHERE pk_usuario = :pk");
		$alterar -> bindValue(':s', $status);
		$alterar -> bindValue(':a', $aviso);
		$alterar -> bindValue(':d', $data);
		$alterar -> bindValue(':pk', $ref);
		$alterar -> execute();
		
		if($alterar):
			echo '<script>alert("Usuário Notificado e Bloqueado!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	
	else:
		$altera = $pdo->prepare("UPDATE usuario SET aviso_usuario = :stat, contagem_avisos_usuario = :aviso WHERE pk_usuario = :pk");
		$altera -> bindValue(':stat', $status);
		$altera -> bindValue(':aviso', $avisos);
		$altera -> bindValue(':pk', $ref);
		$altera -> execute();
		
		if($altera):
			echo '<script>alert("Usuário Notificado!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	endif;

?>
<?php
	include('conexao.php');
	
	$stat = 1;
	$consulta = $pdo->prepare("SELECT * FROM usuario WHERE aviso_usuario = :s");
	$consulta -> bindValue(":s", $stat);
	$consulta -> execute();
	
	foreach($consulta as $mostra):
	endforeach;
	$quantidade_avisos = strip_tags($mostra['contagem_avisos_usuario']);

	if($quantidade_avisos == 3): 
		$status = 0;
		$aviso = 2;
		$data = date('Y-m-d', strtotime('+10 days'));
		$alterar = $pdo->prepare("UPDATE usuario SET status_usuario = :s, aviso_usuario = :a, WHERE aviso_usuario = :pk");
		$alterar -> bindValue(':s', $status);
		$alterar -> bindValue(':a', $aviso);
		$alterar -> bindValue(':pk', $stat);
		$alterar -> execute();
		
		if($alterar):
			echo '<script>alert("Usuário Notificado e Bloqueado!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	
	else:
		$quantidade_avisos = strip_tags($mostra['contagem_avisos_usuario']);
		$status = 1;
		$avisos = $quantidade_avisos + 1;
	
		$altera = $pdo->prepare("UPDATE usuario SET aviso_usuario = :stat, contagem_avisos_usuario = :aviso");
		$altera -> bindValue(':stat', $status);
		$altera -> bindValue(':aviso', $avisos);
		$altera -> execute();
		
		if($altera):
			echo '<script>alert("Todos os Usuários Foram Notificados!")</script>';
			echo '<script>window.location = "index.php"</script>';
		else:
			echo '<script>alert("Ocorreu um erro!")</script>';
			echo '<script>window.location = "index.php"</script>';
		endif;
	endif;

?>
<?php 
	include('conexao.php');
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf8">
		<title>Sistema Administrativo</title>
		<link rel="stylesheet" href="css/framework.css">
		
		<style>
			body{
				background-image: url('fundo-preto.jpg');
				background-size: cover;
				background-attachment: fixed;
			}

			section{width: 100%; height: auto; margin:0;}
			section article{width:80%; height: auto; margin:2% 10%;}
			section article p{margin: 2% 0;}

		</style>
	</head>
	
	<body>
		<section>
			<article>
				<h1 class="font-text-light-extra text-left" style="font-size: 4rem; font-family: 'Courier New', Courier, monospace;">GERENCIAR USUÁRIOS</h1>
				<p class="font-text-light text-left">
					<?php
						$status = 0;
						$consulta = $pdo->prepare("SELECT * FROM usuario WHERE aviso_usuario > :stat");
						$consulta -> bindValue(":stat", $status);
						$consulta -> execute();
						
						foreach($consulta as $mostra):
						endforeach;
					?>
					<span><b><a href="notificar-todos.php" class="link-bgcolor-red-dark-b color-white" style="font-size: 4rem; font-family: 'Courier New', Courier, monospace; color: #fff; text-decoration: none;">Notificar Todos!</a></span>
					<br>
					<div class="espaco-normal"></div>
					
					<?php
						$status = 0;
						$consulta = $pdo->prepare("SELECT * FROM usuario WHERE aviso_usuario > :stat");
						$consulta -> bindValue(":stat", $status);
						$consulta -> execute();
						
						$linhas = $consulta ->rowCount();
						
						if($linhas == 0):
							echo "<p class='alert-ok color-white'>Nenhum usuário para ser notificado!</p>";
						else:
							foreach($consulta as $mostra):
							$status_aviso = strip_tags($mostra['aviso_usuario']);
							if($status_aviso == 1):
					?>
					<span><b><?= strip_tags($mostra['nome_usuario']);?></b> - <a href="notificar.php?codigo=<?= strip_tags($mostra['pk_usuario']);?>" class="link-bgcolor-red-dark-b color-white" style="font-size: 2.25rem; font-family: 'Courier New', Courier, monospace; text-decoration: none; color: #fff;">Notificar!</a></span>
					
					<br><br>

					<?php elseif($status_aviso == 2): ?>
					
					<?php
						$data = strip_tags($mostra['data']);
						$data_agora = date('Y-m-d');
					?>
					
					<?php if($data = $data_agora): ?>
						<span><b><?= strip_tags($mostra['nome_usuario']);?></b> - <a href="desbloquear.php?codigo=<?= strip_tags($mostra['pk_usuario']);?>" class="link-bgcolor-green-dark color-white" style="font-size: 2.25rem; font-family: 'Courier New', Courier, monospace; text-decoration: none; color: #fff;">Desbloquear!</a></span>
					<?php else: ?>
						<span><b><?= strip_tags($mostra['nome_usuario']);?></b> - <a class="link-bgcolor-blue-dark color-white">Desbloquear!</a></span>
					<?php endif; ?>
					
					<?php else: ?>

					<?php endif; endforeach; endif; ?>
				</p>
			</article>
		</section>
	</body>
</html>
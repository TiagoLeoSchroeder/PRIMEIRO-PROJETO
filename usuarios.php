<?php 
	$pdo = new PDO ("mysql: host=localhost; dbname=teste_code", "root", "");
?>

<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf8">
		<title>Sistema Administrativo</title>
		<link rel="stylesheet" href="css/framework.css">
		
		<style>
			section{width: 100%; height: auto; margin:0;}
			section article{width:80%; height: auto; margin:2% 10%;}
			section article p{margin: 2% 0;}
		</style>
	</head>
	
	<body>
		<section>
			<article>
				<h1 class="font-text-light-extra text-left">PÁGINA DO USUÁRIO</h1>
				<p class="font-text-light text-left">
					<?php
						$sessao = 1;
						$contagem = 3;
						$consulta = $pdo->prepare("SELECT * FROM si_usuarios WHERE usuarios_id = :i AND usuarios_contagem_avisos IN (1,2)");
						$consulta -> bindValue(":i", $sessao);
						$consulta -> execute();
						
						$linhas = $consulta ->rowCount();
						
						if($linhas == 0):
							
						else:
							foreach($consulta as $mostra):
							
							$status_aviso = strip_tags($mostra['usuarios_aviso']);
							if($status_aviso == 1):
					?>
					<span>Olá <b><?= strip_tags($mostra['usuarios_nome']);?></b>,<br><br> 
					Você infringiu os nossos termos de uso e política de serviço, estamos notificando você que deverá seguir as regras para que não seja bloqueado!</span>
					
					<?php elseif($status_aviso == 2): ?>
					
					<span>Olá <b><?= strip_tags($mostra['usuarios_nome']);?></b>,<br><br> 
					Você infringiu os nossos termos de uso e política de serviço mais de 3 vezes, estamos notificando você NÃO SEGUIU AS REGRAS e por isso está sendo penalizado com o bloqueio de sua conta até <?= strip_tags(date('d/m/Y', strtotime($mostra['data']))) ?>!</span>
					
					<?php else: ?>
					<?php endif; ?>
					
					<div class="espaco-normal"></div>
					<?php endforeach; endif; ?>
					
					<?php
						
						$sessao = 1;
						$contagem = 3;
						
						$consulta = $pdo->prepare("SELECT * FROM si_usuarios WHERE usuarios_id = :i AND usuarios_contagem_avisos = :c");
						$consulta -> bindValue(":i", $sessao);
						$consulta -> bindValue(":c", $contagem);
						$consulta -> execute();
						
						foreach($consulta as $mostra):
						endforeach;
						
						$quantidade_avisos = strip_tags($mostra['usuarios_contagem_avisos']);
						
					
						$datar = array(date('Y-m-d', strtotime($mostra['data'])),  date('Y-m-d', strtotime('+7 days')));
						$data_agora = date('Y-m-d');
						
						foreach($datar as $k):
						endforeach;
						
						if($k >= $data_agora && $quantidade_avisos == 3):
							echo "<span>Olá <b>". strip_tags($mostra['usuarios_nome'])."</b>,<br><br> 
							Você infringiu os nossos termos de uso e política de serviço mais de 3 vezes, estamos notificando você NÃO SEGUIU AS REGRAS e por isso está sendo penalizado com o bloqueio de sua conta até ". strip_tags(date('d/m/Y', strtotime($mostra['data']))) ."!</span>";
						endif;
					?>
				</p>
			</article>
		</section>
	</body>
</html>
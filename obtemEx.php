<?php
  // Verifica se o id do treino foi informado
  if(!isset($_POST['id']))
  {
    // Se nao informou retorna com erro
    echo "Id do exercicio nao informado";
    exit;
  }
  // Se informou entao le do banco de dados
    $idTreino  = $_POST['id'];
    include('conexao.php');
    $query = $pdo->query("SELECT musculo as nm, idexercicio as id FROM exercicios WHERE idtreino={$idTreino}");
    $qt = 0;
    $html = '<ul>';
    while ($row = $query->fetch()) 
    {
      $html .= '<li id=' . $row['id'] . '>' . $row['nm'] . '</li>';
      $qt++;
    }
    $html .= '</ul>';
    if($qt==0)
    {
      echo "Nenhum exercicio encontrado para o treino #{$idTreino}";
    }
    else
    {
      echo $html;
    }
?>
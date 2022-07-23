<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $date = $_POST['datanasc'];
    
  //criar o delete
  $sql = "select * from tbcli
		  where month(datanasc)= '12'";
  //executo o comando
  $niver = $conexao->query($sql);
  
  if($niver == true){
	  header('Location: aniversario.php?aniver=ok');
  }else{
	  header('Location: aniversario.php?aniver=erro');
  }
  
  
  
  
  
    
?>
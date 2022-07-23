<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $cod = $_GET['cod'];
    
  //criar o delete
  $sql = "delete from tbcliente
		  where codcli = $cod";
  //executo o comando
  $delete = $conexao->query($sql);
  
  if($delete == true){
	  header('Location: buscacli.php?delete=ok');
  }else{
	  header('Location: buscacli.php?delete=erro');
  }
  
  
  
  
  
    
?>
<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $cod = $_GET['cod'];
    
  //criar o delete
  $sql = "delete from tbusuario
		  where codUsu = $cod";
  //executo o comando
  $delete = $conexao->query($sql);
  
  if($delete == true){
	  header('Location: buscausu.php?delete=ok');
  }else{
	  header('Location: buscausu.php?delete=erro');
  }
  
  
  
  
  
    
?>
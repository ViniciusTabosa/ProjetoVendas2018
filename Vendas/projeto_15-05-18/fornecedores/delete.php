<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $cod = $_GET['cod'];
    
  //criar o delete
  $sql = "delete from tbfornecedores
		  where codFornecedores = $cod";
  //executo o comando
  $delete = $conexao->query($sql);
  
  if($delete == true){
	  header('Location: buscaforn.php?delete=ok');
  }else{
	  header('Location: buscaforn.php?delete=erro');
  }
  
  
  
  
  
    
?>
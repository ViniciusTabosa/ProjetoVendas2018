<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $cod = $_GET['cod'];
    
  //criar o delete
  $sql = "delete from tbproduto
		  where codProduto = $cod";
  //executo o comando
  $delete = $conexao->query($sql);
  
  if($delete == true){
	  header('Location: buscapro.php?delete=ok');
  }else{
	  header('Location: buscapro.php?delete=erro');
  }
  
  
  
  
  
    
?>
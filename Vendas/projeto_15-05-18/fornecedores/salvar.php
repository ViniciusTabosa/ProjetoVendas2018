<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $endereco = $_POST['endereco'];
  $fone = $_POST['fone'];
  
  
  //criar o insert
  $sql = "insert into tbfornecedores(codFornecedores,nome,cpf,endereco,fone)
                     values(null,'$nome','$cpf','$endereco','$fone')";
  //executo o comando
  $inserir = $conexao->query($sql);
  
  if($inserir == true){
	  header('Location: cadastroforn.php?insert=ok');
	 
  }else{
	  header('Location: cadastroforn.php?insert=erro');
  }
  
  
  
  
  
    
?>
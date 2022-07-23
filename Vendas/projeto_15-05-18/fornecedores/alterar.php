<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $codFornecedores = $_POST['codFornecedores'];
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $endereco = $_POST['endereco'];
  
  //criar o update
  $sql = "update tbfornecedores set 
		  nome = '$nome',
          cpf = '$cpf',
		  endereco = '$endereco'
          where codFornecedores = $codFornecedores";
  
  //executo o comando
  $alterar = $conexao->query($sql);
  
  if($alterar == true){
	  header('Location: buscaforn.php?update=ok');
	 
  }else{
	  header('Location: buscaforn.php?update=erro');
  }
  
  
  
  
  
    
?>
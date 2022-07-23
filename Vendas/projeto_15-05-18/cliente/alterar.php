<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $codCli = $_POST['codCli'];
  $nome = $_POST['nome'];
  $nascimento = $_POST['nascimento'];
  $fone = $_POST['telefone'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $endereco = $_POST['endereco'];
 
  
  //criar o update
  $sql = "update tbcliente set 
		  nome = '$nome',
		  nascimento = '$nascimento',
		  fone = '$telefone',
		  rg = '$rg',
		  cpf = '$cpf',
          endereco = '$endereco'
          where codCli = $codCli";
  
  //executo o comando
  $alterar = $conexao->query($sql);
  
  if($alterar == true){
	  header('Location: buscacli.php?update=ok');
	 
  }else{
	  header('Location: buscacli.php?update=erro');
  }
  
  
  
  
    
?>
<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $nome = $_POST['nome'];
  $endereco = $_POST['endereco'];
  $fone = $_POST['telefone'];
  $rg = $_POST['rg'];
  $cpf = $_POST['cpf'];
  $nascimento = $_POST['datanasc']; 

  
  //criar o insert
  $sql = "insert into tbcliente(codCli,nome,nascimento,fone,rg,cpf,endereco)
                     values(null,'$nome','$nascimento','$fone','$rg','$cpf','$endereco')";
  echo $sql; 				 
  //executo o comando
  $inserir = $conexao->query($sql);
  
  if($inserir == true){
	  header('Location: cadastrocli.php?insert=ok');
	  //echo 'deu certo'; 
  }else{
	 header('Location: cadastrocli.php?insert=erro');
	  //echo 'deu errado '.mysqli_error();
  }
  
  
  
  
  
    
?>
<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $codUsu = $_POST['codusu'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //criar o update
  $sql = "update tbusuario set 
		  nome = '$nome',
          email = '$email',
          senha = '$senha'
          where codusu = $codUsu";
  
  //executo o comando
  $alterar = $conexao->query($sql);
  
  if($alterar == true){
	  header('Location: buscausu.php?update=ok');
	 
  }else{
	  header('Location: buscausu.php?update=erro');
  }
  
  
  
  
  
    
?>
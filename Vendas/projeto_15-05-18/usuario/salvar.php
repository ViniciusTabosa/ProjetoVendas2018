<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $nome = $_POST['nome'];
  $senha = $_POST['senha'];
  $email = $_POST['email'];
  
  
  //criar o insert
  $sql = "insert into tbusuario(codusu,nome,senha,email)
                     values(null,'$nome','$senha','$email')";
  //executo o comando
  $inserir = $conexao->query($sql);
  
  if($inserir == true){
	  header('Location: cadastrousu.php?insert=ok');
	 
  }else{
	  header('Location: cadastrousu.php?insert=erro');
  }
  
  
  
  
  
    
?>
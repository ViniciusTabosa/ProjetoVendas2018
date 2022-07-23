<?php
   //acesso ao banco
   include 'banco.php';
   
   //recebendo as variáveis    
   $usu = $_POST['usuario'];
   $senha = $_POST['senha'];
   
   //criando a consulta
   $sql = "select * from tbusuario 
		   where 
		   nome = '$usu' and senha = '$senha'";
   
   //executo o comando
   $consulta = $conexao->query($sql);
   
   if($consulta->num_rows > 0){
      $linha=$consulta->fetch_array(MYSQLI_ASSOC);
      
	  session_start();	  
     $_SESSION['codusu'] = $linha['codUsu'];
	  $_SESSION['usuario'] = $usu; 	

      header('Location: principal.php');	  
	  
   }else{
	  header('Location: index.php?login=erro');  
   }
?>
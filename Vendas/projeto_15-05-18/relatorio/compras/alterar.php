<?php
  //Conexão com o BD
  include '../banco.php';
  
  //Recebendo variáveis
  $codProduto = $_POST['codProduto'];
  $descricao = $_POST['descricao'];
  $unidade = $_POST['unidade'];
  $precoCusto = $_POST['precoCusto'];
  $precoVenda = $_POST['precoVenda'];
  $estoque = $_POST['estoque'];
  $codFornecedor = $_POST['codFornecedor'];
  
  //criar o update
  $sql = "update tbproduto set 
		  descricao = '$descricao',
          unidade = '$unidade',
          precoCusto = '$precoCusto',
		  precoVenda = '$precoVenda',
		  estoque = '$estoque',
          codFornecedor = '$codFornecedor'
          where codProduto = $codProduto";
  
  //executo o comando
  $alterar = $conexao->query($sql);
  
  if($alterar == true){
	   header('Location: buscapro.php?update=ok');
	 
  }else{
	   header('Location: buscapro.php?update=erro');
  }
  
  
  
  
  
    
?>
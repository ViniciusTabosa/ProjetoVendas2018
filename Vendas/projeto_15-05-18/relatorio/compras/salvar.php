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
  
    //tirando virgulas 
  $precoCusto=  str_replace('.','',$precoCusto);
 $precoCusto= str_replace(',','.',$precoCusto);
 $precoVenda = str_replace('.','',$precoVenda);
  $precoVenda = str_replace(',','.',$precoVenda);
  
  //criar o insert
  $sql = "insert into tbproduto(codProduto,descricao,unidade,precoCusto,precoVenda,estoque,codFornecedor)
          values(null,'$descricao','$unidade','$precoCusto', '$precoVenda','$estoque',null)";

  //executo o comando
  $inserir = $conexao->query($sql);
  
  if($inserir == true){
	  header('Location: cadastropro.php?insert=ok');
	 
  }else{
	  header('Location: cadastropro.php?insert=erro');
  }
  
  
  
  
  
    
?>
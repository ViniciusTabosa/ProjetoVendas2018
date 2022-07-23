<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<?php
   include 'sessao.php';
   include 'cabecalhobusca.php';
?>

<script>
   function deletar(cod){
	   if(confirm('Deseja excluir esse item?')){
		  location.href='delete.php?cod='+cod; 
	   }
   }
   function alterar(cod){
	   if(confirm('Deseja alterar esse item?')){
		  location.href='alterapro.php?cod='+cod; 
	   }
   }   
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="../css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">Sales</a></h1>
							</div>
					<div class="w3layouts-left">
							
							<!--search-box-->
								<div class="w3-search-box">
									<form action="#" method="post">
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Nenhuma Notificação</h3>
												</div>
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Nenhuma Notificação</h3>
												</div>
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>Nenhuma Notificação</h3>
												</div>
											</li>
										</ul>
									</li>	
									<div class="clearfix"> </div>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">

										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											
												<span class="prfil-img"><img src="../images/in4.jpg" alt=""> </span> 
												<div class="user-name">

													<p> <?php echo $_SESSION['usuario'];?> </p>
													<span> </span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../sair.php"><i class="fa fa-sign-out"></i>Sair</a> </li>
										</ul>
									</li>
								</ul>
						</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="principal.php">Principal</a><i class="fa fa-angle-right"></i>Produtos<i class="fa fa-angle-right"></i>Busca de Produtos</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					<a href="cadastropro.php" class="btn btn-md btn-success pull-right"><i class="fa fa-plus"></i>&nbsp;Novo</a></br>
					  <h2>Produtos</h2>
					  
					  <form name="f1" method="POST" action="#"><br>		
						
						 <?php
						     //teste do update
						     if(isset($_GET['update'])){
								if($_GET['update']=='ok'){
									echo '<div class="alert alert-success alert-dismissable" role="alert">
											<a href="#" class="close" data-dismiss="alert" >&times;</a>
											<strong>Atenção!</strong> Dados alterados com sucesso!
										  </div>';  
								}else{
									echo '<div class="alert alert-danger alert-dismissable" role="alert">
											<a href="#" class="close" data-dismiss="alert" >&times;</a>
											<strong>Atenção!</strong> Erro ao Alterar!
										  </div>';
								}
							}
						 
							//teste de delete
							if(isset($_GET['delete'])){
								if($_GET['delete']=='ok'){
									echo '<div class="alert alert-success alert-dismissable" role="alert">
											<a href="#" class="close" data-dismiss="alert" >&times;</a>
											<strong>Atenção!</strong> Dados excluídos com sucesso!
										  </div>';  
								}else{
									echo '<div class="alert alert-danger alert-dismissable" role="alert">
											<a href="#" class="close" data-dismiss="alert" >&times;</a>
											<strong>Atenção!</strong> Erro ao excluir!
										  </div>';
								}
							}
					  ?>
						
						 <div class="input-group text-left">
							    <input class="form-control" type="text" name="texto" placeholder="Digite o nome do usuario">
							<span class="input-group-btn">
							   
							   <button class="btn btn-md btn-primary"><i class="fa fa-search"></i> Buscar</button>
							</span>   
						 </div>
					  </form>
					  
					    <table id="table">
						<thead>
						  <tr>
							<th>Codigo do Produto</th>
							<th>Descrição</th>
							<th>Unidade</th>
							<th>Preço de Custo</th>
							<th>Preço de Venda </th>
							<th>Estoque</th>
							<th>Fornecedor</th>
							
							
							<th class="col-md-2">Opções</th>
						  </tr>
						</thead>
						<?php
					    if(isset($_POST['texto'])){
							//recebendo o valor da busca'
							$texto = $_POST['texto'];
							
							//acesso ao banco
							include '../banco.php';
							
							//criando a consulta
							$sql = "select * from tbproduto
							        where descricao like
									'%$texto%'";
									
							$consulta = $conexao->query($sql);
							
							if($consulta->num_rows > 0){
							   while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
								   echo '<tr>
											<td>'.$linha['codProduto'].'</td>
											<td>'.$linha['descricao'].'</td>
											<td>'.$linha['unidade'].'</td>
											<td>'.$linha['precoCusto'].'</td>
											<td>'.$linha['precoVenda'].'</td>
											<td>'.$linha['estoque'].'</td>
											<td>'.$linha['codFornecedor'].'</td>
											<td>
											 <a title="Alterar" onclick=alterar('.$linha['codProduto'].')    href="#" class="btn btn-sm btn-primary"><i class="fa fa-edit" style="color: white;"></i></a>
											 <a title="Excluir" onclick=deletar('.$linha['codProduto'].')  href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash" style="color: white;"></i></a>
													
											</td>
										  </tr>';
							   }
							}else{
							   echo 'consulta vazia';
							}								
							
								
						}
					  ?>			
						</tbody>
					  </table>
					</div>
				</div>
				<!-- //tables -->
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php
	include '../rodape.php';
?>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="../principal.php"><i class="fa fa-home"></i> <span>Principal</span><div class="clearfix"></div></a></li>
										
										
											<li><a href="../usuario/buscausu.php"><i class="fa fa-user"></i><span>Usuario</span><div class="clearfix"></div></a></li>
											<li><a href="../cliente/buscacli.php"><i class="fa fa-user"></i><span>Cliente</span><div class="clearfix"></div></a></li>
											
										 
										
										<li><a href="buscapro.php"><i class="fa fa-shopping-cart"></i> <span>Produtos</span><div class="clearfix"></div></a></li>
										<li><a href="../fornecedores/buscaforn.php"><i class="fa fa-truck"></i> <span>Fornecedores</span><div class="clearfix"></div></a></li>
										
										<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Relatório</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="../compra/buscacom.php">Compra</a></li>
											<li id="menu-academico-avaliacoes" ><a href="../venda/buscaven.php">Vendas</a></li>
										  </ul>
										</li>
									</ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="../js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="../js/raphael-min.js"></script>
<script src="../js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>
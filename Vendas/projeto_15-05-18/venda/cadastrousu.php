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
   include 'cabecalho.php';
?>

<script>
  function validar(){
     if(confirm("Deseja cadastrar novo usuário?")){
		 
	 }else{
		return false; 
	 }	 
  }
</script>

<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
</script>

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
									<form action="#" method="POST">
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
											<li> <a href="../sair.php"><i class="fa fa-sign-out"></i> Sair</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../principal.php">Principal</a><i class="fa fa-angle-right"></i>Usuario <i class="fa fa-angle-right"></i> Busca de Usuarios<i class="fa fa-angle-right"></i>Cadastro de Usuario</li>
            </ol>
		<!--grid-->
 	<div class="grid-form">

  <div class="grid-form1">
		   
  	       <center><h3><i class="fa fa-user"></i> Iniciar Venda </h3></center>
		   
		   <?php
				//teste de cadastro
					if(isset($_GET['insert'])){
						if($_GET['insert']=='ok'){
							echo '<div class="alert alert-success alert-dismissable" role="alert">
								  <a href="#" class="close" data-dismiss="alert" >&times;</a>
								  <strong>Atenção!</strong> Dados Cadastrados com sucesso!
								  </div>';  
							}else{
								echo '<div class="alert alert-danger alert-dismissable" role="alert">
									   <a href="#" class="close" data-dismiss="alert" >&times;</a>
									   <strong>Atenção!</strong> Erro ao cadastrar!
									  </div>';
								}
							}
			?>
		   
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
						
						
						
							<form class="form-horizontal" method="POST" action="salvar.php" onsubmit=" return validar();"><br>
							
								<div class="form-group">
										<label class="col-md-2 control-label">Selecione o Cliente</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-user"></i>
											</span>
												<select name="codcli" class="form-control1">
													 <option value="0">Selecione um Cliente</option>
													    <?php
													      include '../banco.php';
							
									//criando a consulta
									$sql = "select * from tbcliente
									        order by nome";
											
									$consulta = $conexao->query($sql);
									
									if($consulta->num_rows > 0){
									   while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){ 
									   		echo '<option value='.$linha['codcli'].'>'.$linha['nome'].'</option>';	
									   }
									}

													    ?>
												</select>
										</div>
									</div>
								</div>
								
								<div class="form-group">
										<label class="col-md-2 control-label"> Data</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-lock"></i>
											</span>
												<input name="senha" id="senha" type="password" class="form-control1" placeholder="Sua Senha">
										</div>
									</div>
								</div>
								
								<div class="form-group">
										<label class="col-md-2 control-label">Hora</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
												<input name="email" id="email" type="email" class="form-control1" placeholder="Seu E-mail">
										</div>
									</div>
								</div>
								
								
								<br>
								
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button type="submit" class="btn-primary btn">Cadastrar</button>
											<a href="buscausu.php" class="btn-default btn">Cancelar</a>
										</div>
									</div>
								</div>
								
							</form>
						</div>
					</div>
  </div>
 	</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
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
										
										
											<li><a href="buscausu.php"><i class="fa fa-user"></i><span>Usuario</span><div class="clearfix"></div></a></li>
											<li><a href="../cliente/buscacli.php"><i class="fa fa-user"></i><span>Cliente</span><div class="clearfix"></div></a></li>
											
										 
										
										<li><a href="../produtos/buscapro.php"><i class="fa fa-shopping-cart"></i> <span>Produtos</span><div class="clearfix"></div></a></li>
										<li><a href="../fornecedores/buscaforn.php"><i class="fa fa-truck"></i> <span>Fornecedores</span><div class="clearfix"></div></a></li>
										
										<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Relatório</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="calendar.html">Compra</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signin.html">Vendas</a></li>
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
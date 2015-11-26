<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title> HK Lowell Brasil- Contato </title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>static/imagens/gt_favicon.jpg">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo base_url(); ?>static/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index"><img src="<?php echo base_url(); ?>static/imagens/logoh.png" alt="Logo"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index">Home</a></li>
					<li><a href="sobre">Sobre</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produtos e Serviços <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="maquina">Maquina "Mosquito"</a></li>
							<li><a href="handle">Handle</a></li>
						</ul>
					</li>
					<li class="active"><a href="contato">Contato</a></li>
					<li class="active"><a href="login">Area Exclusiva</a></li>
					<!--<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active">Contato</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Contato</h1>
				</header>
				
				<p>
					Entre em contato conosco através do Formulário abaixo, ou através do e-mail contato@hklowellbrasil.com.br. Retornaremos em Breve.
				</p>
				<br>
					<form method="POST" action="/index.php/Controle/insereCont">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Nome" name="nome">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Email" name="email">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Telefone" name="tel">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Digite aqui a sua mensagem..." class="form-control" rows="9" name="msg"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<!--<label class="checkbox"><input type="checkbox"> Sign up for newsletter</label>
							</div> -->
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Enviar">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-3 sidebar sidebar-right">

				<div class="widget">
					<h4>Endereço</h4>
					<address>
					Av. Pinheiro Machado, 70 cj 74 - Vila Mathias - Santos-SP
					</address>
					<h4>Telefone</h4>
					<address>
						(13) 3301-2042
					</address>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

	<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-3 widget">
						<h3 class="widget-title">Contato</h3>
						<div class="widget-body">
							<p> 55 13 3301-2042<br>
								<a href="mailto:#">contato@hklowellbrasil.com.br</a><br>
								<br>
								Av. Pinheiro Machado, 70 cj 74 - Vila Mathias - Santos-SP
							</p>	
						</div>
					</div>

					<div class="col-md-3 widget">
						<!--<h3 class="widget-title">Follow me</h3>
						<div class="widget-body">
							<p class="follow-me-icons clearfix">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
							</p>	-->
						</div>
					</div>

					<!--<div class="col-md-6 widget">
						<h3 class="widget-title">Text widget</h3>
						<div class="widget-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
							<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
						</div> -->
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<!--<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="about.html">About</a> |
								<a href="sidebar-right.html">Sidebar</a> |
								<a href="contact.html">Contact</a> |
								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div> -->
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2015. <!--<a href="http://gettemplate.com/" rel="designer">gettemplate</a> -->
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/headroom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jQuery.headroom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>static/js/template.js"></script>
	
	<!-- Google Maps -->
	<iframe src="https://maps./place/R.+Dr.+Ant%C3%B4nio+Bento,+17+-+Vila+Matias,+Santos+-+SP,+11075-260/@-23.9432749,-46.3333701,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce037ba7fb8ca1:0x38e1eb64d3bcdfa key=&amp;sensor=false&amp;extension=.js"></iframe> 
		<script type="text/javascript" src="<?php echo base_url(); ?>static/js/google-map.js"></script>
	

</body>
</html>
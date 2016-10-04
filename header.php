<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>FLX Consultoria</title>
	<link rel='stylesheet' id='style-css' href='css/style.css' type='text/css' media='screen' />
	<link rel="icon" href="Graphics/favicon.png" type="image/png" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var option = 'product1';
			var url = window.location.href;
			option = url.match(/option=(.*)/)[1];
			showDiv(option);
		});
		function showDiv(option) {
			$('.product').hide();
			$('#' + option).show();
		}
	</script>
	
	<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic|Open+Sans:300italic,400italic,600italic,700italic,700,600,400,300' rel='stylesheet' type='text/css'>
	
	<!--[if lte IE 9]>
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:700italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700italic' rel='stylesheet' type='text/css'>
	<![endif]-->
	
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5070998-36', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body <?php if ($pageName=="Home") echo 'id="home"'; ?>>
	<div id="MainContainer">
		<header>
			<nav>
				<ul>
					<li><a href="index.php" <?php if ($pageName=="Home") echo 'class="active"'; ?>>Home</a></li>
					<li><a href="empresa.php" <?php if ($pageName=="Empresa") echo 'class="active"'; ?>>Empresa</a></li>
					<li><a href="securitizacao.php" <?php if ($pageName=="Securitizacao") echo 'class="active"'; ?>>Securitização</a></li>
					<li class="artha"><a href="index.php">FLX Consultoria</a></li>
					<li><a href="produtos.php" <?php if ($pageName=="Produtos") echo 'class="active"'; ?>>Produtos</a></li>
					<li><a href="estruturacao.php" <?php if ($pageName=="Estruturacao") echo 'class="active"'; ?>>Estruturação</a></li>
					<li><a href="contato.php" <?php if ($pageName=="Contato") echo 'class="active"'; ?>>Contato</a></li>
				</ul>
			</nav>
		</header>
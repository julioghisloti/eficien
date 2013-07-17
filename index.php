<!doctype html>
<html class="no-js" lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>EficienSoft -  Consultoria em TI</title>

	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=9" />
	<meta content='IE=8' http-equiv='X-UA-Compatible' />
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Style --> 
	<link rel="stylesheet" href="assets/style/base.css" />
	<link rel="stylesheet" href="assets/style/index.css" />

	<!-- MAXIMAGE -->
	<link rel="stylesheet" href="assets/style/jquery.maximage.css" type="text/css" media="screen" />
	

</head>
<body>
	
	<div id="index-all"><img src="assets/img/bgs/bg-index.png" width="1440" height="900" alt=""></div>
		
	<!-- start -Page- -->
		<section id="page-all">

			<!-- Top --><?php include "assets/comp/top.php"; ?>

			<section id="txt">
				<h1>Oferecemos mais do que tecnologia. <br /> Oferecemos tranquilidade</h1>
				<h2>Cuidadamos do seu ambiente de TI, para que você possa cuidar de todo o resto</h2>
			</section>		

		</section>
	<!-- end -Page- -->

	<!-- Script -->
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.js"></script>
	<script type="text/javascript" src="assets/js/jquery.maximage.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript">
		$(function (){

			//MAXIMAGE
			$('#index-all').maximage();

			//Modernizr
			if(!Modernizr.textshadow){ $('#txt').addClass("_fix-bg-txt"); }

		)}
	</script>
	
</body>
</html>
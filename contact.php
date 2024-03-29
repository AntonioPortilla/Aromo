<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hostal Aromo - Contacto</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<meta name="description" content="fabrikat"/>
	<meta name="author" content="JALP Laveriano">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link rel="icon" href="favicon.ico">
	<style>
		.box-nosotros h2 {
			font-size: 2em;
			text-align: center;
		}
		.box-nosotros {
			background-color: rgba(255,183,21, .8) !important;
			padding: 25px;
		}
		@media (max-width:550px){
			header {
				width: 100% !important;
			}
			header .logo{
				margin: auto;
			}
			header .logo img {
				display: block;
				margin: auto;
				width: 100px;
			}
		}
	</style>
</head>
<body>
	<header style="box-sizing:initial">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" title="aromo" alt="aromo"/></a>
		</div>
		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="nosotros.html">Nosotros</a></li>
				<li><a href="servicios.html">Servicios</a></li>
				<li><a href="galeria.html">Galería</a></li>
				<li><a href="#" class="selected">Contacto</a></li>
			</ul>
		</nav>
		<div class="footer clearfix">
			<div class="rights">
				<p>Dirección: Calle Camana N° 464 <br> 
				Urb. Las Mercedes ICA - PERU</p>
				<p>Teléfono: (056) 229654</p>
				<p>Email: info@aromoinn.com</p>
			</div><!-- end rights -->
			<ul class="social clearfix">
				<li><a href="#" class="fb" data-title="Facebook"></a></li>
				<li><a href="#" class="youtube" data-title="youtube"></a></li>
				<li><a href="#" class="twitter" data-title="Twitter"></a></li>
				<li><a href="#" class="linkedin" data-title="Linkedin"></a></li>
				<li><a href="#" class="google" data-title="Google +"></a></li>
				<!--<li><a href="#" class="rss" data-title="RSS"></a></li>-->
			</ul>
		</div>
	</header>
	<section class="main clearfix">
		<article class="contenido bg-home bg-contact" style="overflow:hidden">
			<div class="info conta" style="height:100%;width:50%;float:left">
				<div class="box-nosotros" style="width:100%">
					<h2 class="title">CONTACTANOS Y HAS TU RESERVACIÓN</h2>
					<form class="form-horizontal" id="contact">
						<div class="form-group">
							<input type="text" class="form-control" id="nombres" placeholder="NOMBRES">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" placeholder="EMAIL">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="telf" placeholder="TELÉFONO">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="fin" placeholder="FECHA DE INGRESO">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="fout" placeholder="FECHA DE SALIDA">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" placeholder="MENSAJE"></textarea>
						</div>
						<div class="form-group">
							<button type="button" class="btn btn-default btn-block">ENVIAR</button>
						</div>
					</form>
				</div>
			</div>
			<div class="mapa">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3870.1505919289157!2d-75.73212299999999!3d-14.068283300000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9110e298142d948b%3A0x66cfd19ee3ca8eee!2sCalle+Camana%2C+Ica!5e0!3m2!1ses!2spe!4v1460135784378" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</article>
	</section>
</body>
</html>
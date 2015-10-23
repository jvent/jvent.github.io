<?php

	$name = $_REQUEST['name'];
	$email = $_REQUEST['e-mail'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];

?>

<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8" lang="es"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="es"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Portafolio Web | Uriel Cortés</title>
		<!--[if lt IE 9]>
			<script src=""http://html5shiv.googlecode.com/svn/trunk/html5.js"">
			</script>
		<![endif]-->
		<!--[if !IE]><!-->
			<script>
				if (/*@cc_on!@*/false && document.documentMode === 10) {
					document.documentElement.className+=' ie10';
				}
			</script>
		<!--[endif]-->
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>
		<!-- this button is for small devices -->
		<button id="toggle-menu-button" class="hamburger-icon" onclick="showMainNavigation();">
			<span>Menu</span>
		</button>

		<nav id="menu-navigation" class="hide" role="navigation">
			<ul class="menu-links">
				<li><a href="../index.html">Trabajos</a></li>
				<li><a href="../about.html">Sobre mí</a></li>
				<li><a href="../contact.html">Contacto</a></li>
			</ul>
			<ul class="page-languages">
				<li><a href="en/index.html"><small>en</small></a></li>
				<li><span>/</span></li>
				<li><a href="fr/index.html"><small>fr</small></a></li>
			</ul>
		</nav>

		<main class="main-container" role="main">
			<section class="container" role="contentinfo">
				<header class="title">
					<h1>Datos</h1>
				</header>

				<section class="form-group">
					<small>Nombre</small>
					<p><?php echo $name; ?></p>
				</section>

				<section class="form-group">
					<small>E-mail</small>
					<p><?php echo $email; ?></p>
				</section>

				<section class="form-group">
					<small>Teléfono</small>
					<p><?php echo $phone; ?></p>
				</section>

				<section class="form-group">
					<small>Mensaje</small>
					<p><?php echo $message; ?></p>
				</section>
			</section>
		</main>

		<script type="text/javascript" src="main.js"></script>
	</body>
</html>
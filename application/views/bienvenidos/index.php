<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Escuela Actme</title>
	<link rel="stylesheet" type="text/css" href="extras/bs3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="extras/bs3/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<div class="header clearfix">
			<nav>
				<ul class="nav nav-pills pull-right">
					<li>Inicio</li>
					<li>Acerca de nosotros</li>
					<li>Contacto</li>
				</ul>
			</nav>
			<h3>Escuela Acme</h3>
		</div>
		<div class="jumbotron">
			<h1>Bienvenidos al sistema de Gestion</h1>
			<p class="lead">Aqui encontraras acceso a Alumnos, Maestros y Grupos.</p>
		</div>
		<div class="row marketing">
			<div class="col-lg-6">
				<h4><a href="<?php echo base_url('alumnoscontroller/index'); ?>">Alumnos</a></h4>
				<h4>Grupos</h4>
				<h4>Asignación</h4>
				<h4><a href="<?php echo base_url('maestroscontroller/index'); ?>">Maestros</a></h4>
			</div>
		</div>
		<footer class="footer">
			<p>Escuela 2015</p>
		</footer>
	</div>

	<script type="text/javascript" src="extras/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="extras/bs3/js/bootstrap.min.js"></script>
</body>
</html>
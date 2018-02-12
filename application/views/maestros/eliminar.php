<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>extras/bs3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>extras/bs3/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<div class="span10 of-set1">
			<div class="row">
				<h3>Eliminar Maestro</h3>
			</div>
			<form action="" method="post" class="form-horizontal">
				<input type="hidden" name="id" value="<?php echo $objMaestro->id; ?>" >
				<p class="alert alert-error">¡Estás seguro de eliminar a <?php echo $objMaestro->nombre.' '.$objMaestro->apellidos; ?> ?</p>
				<div class="form-action">
					<button type="submit" class="btn btn-danger">Si</button>
					<a href="<?php echo base_url('maestroscontroller/index'); ?>" class="btn btn-success">No</a>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
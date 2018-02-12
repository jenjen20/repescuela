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
		<div class="row">
			<div class="col-md-6">
				<form action="">
					<fieldset>
						<div id="legend"><h2>Maestro</h2></div>
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<div class="controls">
								<?php echo $objMaestro->nombre; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos:</label>
							<div class="controls">
								<?php echo $objMaestro->apellidos; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
							<div class="controls">
								<?php echo $objMaestro->fecha_nacimiento; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>						
						<div class="form-group">
							<label for="telefono">Telefono:</label>
							<div class="controls">
								<?php echo $objMaestro->telefono; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<a href="<?php echo base_url('maestroscontroller/index'); ?>" class="btn btn-success">Regresar</a>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
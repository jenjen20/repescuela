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
						<div id="legend"><h2>Alumno</h2></div>
						<div class="form-group">
							<label for="nombre">Nombre:</label>
							<div class="controls">
								<?php echo $objAlumno->nombre; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="apellidos">Apellidos:</label>
							<div class="controls">
								<?php echo $objAlumno->apellidos; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email:</label>
							<div class="controls">
								<?php echo $objAlumno->email; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="domicilio">Domicilio:</label>
							<div class="controls">
								<?php echo $objAlumno->domicilio; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="ciudad">Ciudad:</label>
							<div class="controls">
								<?php echo $objAlumno->ciudad; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="estado">Estado:</label>
							<div class="controls">
								<?php echo $objAlumno->estado; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="pais">Pais:</label>
							<div class="controls">
								<?php echo $objAlumno->pais; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
							<div class="controls">
								<?php echo $objAlumno->fecha_nacimiento; ?>
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<div class="controls">
								<a href="<?php echo base_url('alumnoscontroller/index'); ?>" class="btn btn-success">Regresar</a>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
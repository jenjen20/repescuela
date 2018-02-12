<!DOCTYPE html>
<html lang="es">
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
				<?php echo form_open('maestroscontroller/crear', 
							array('class' => 'form-horizontal', 'data-toggle' => 'validator')); 
						//para editar un alumno (su id)
						echo form_hidden('id', $id);
				?>
				<fieldset>
					<div id="legend">
						<h2><?php echo $subtitulo; ?></h2>
					</div>
					<div class="form-group">
						<?php echo form_error('nombre'); ?>
						<?php echo form_error('apellidos'); ?>
					</div>
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<div class="controls">
							<?php echo form_input($nombre); ?>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="apellidos">Apellidos:</label>
						<div class="controls">
							<?php echo form_input($apellidos); ?>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="fecha_nacimiento">Fecha de Nacimiento:</label>
						<div class="controls">
							<?php echo form_input($fecha_nacimiento); ?>
							<div class="help-block with-errors"></div>
						</div>
					</div>					
					<div class="form-group">
						<label for="telefono">Telefono:</label>
						<div class="controls">
							<?php echo form_input($telefono); ?>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="controls">
							<button class="btn btn-success">Registrar</button>
						</div>
					</div>
				</fieldset>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/bs3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/js/validator.min.js"></script>
</body>
</html>
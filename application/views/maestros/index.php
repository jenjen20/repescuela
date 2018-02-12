<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>extras/bs3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>extras/bs3/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>extras/datatables/jquery.dataTables.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1><?php echo $titulo; ?></h1>
		</div>
		<div class="row">
			<a class="btn btn-success" href="<?php echo base_url('maestroscontroller/crear'); ?>"><?php echo $crear; ?></a>
		</div>
		<div class="row">
			<table id="tbmaestros" class="display" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th>Acciones</th>
					</tr>
				</tfoot>
				<tbody>
					<?php foreach($busquedaMaestro->result() as $renglon): ?>
					<tr>
						<td><?php echo $renglon->id; ?></td>
						<td><?php echo $renglon->nombre; ?></td>
						<td><?php echo $renglon->apellidos; ?></td>
						<td><?php echo $renglon->fecha_nacimiento; ?></td>
						<td><?php echo $renglon->telefono; ?></td>
						<td><a class="btn btn-default" href="<?php echo base_url('maestroscontroller/mostrar/'.$renglon->id); ?>">Mostrar</a>
							<a class="btn btn-success" href="<?php echo base_url('maestroscontroller/editar/'.$renglon->id); ?>">Editar</a>
							<a class="btn btn-danger" href="<?php echo base_url('maestroscontroller/eliminar/'.$renglon->id); ?>">Eliminar</a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/bs3/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/js/validator.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>extras/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tbmaestros').DataTable({

		});
	});
</script>
</body>
</html>
<html>
	<head>
        <title>RestFul Service C.E LP</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<style>
		body{
		background-image: url("nube.jpg"); /* The image used */
		background-color: #cccccc; /* Used if the image is unavailable */
		height: 500px; /* You must set a specified height */
		background-position: center; /* Center the image */
		background-repeat: no-repeat; /* Do not repeat the image */
		background-size: cover; /* Resize the background image to cover the entire container */
		}
		.title_api{
			background:#C4DEF5;
			padding:5px;
		}
		.endpoints{
			cursor:pointer;
		}
	</style>
    <body >
            <?php
				$servidor = "localhost:81/php_proyectos/api/";
			?>
			<div class="container" >
				<small>
				<div class="row" >			
					<div class="col-md-4 title_api">
						<img class="img img-responsive" src="api/institucion.PNG" style="width:95px; height:95px;"/>
					</div>
					<div class="col-md-8 title_api">
						<h2><b>RestFul Service</b></h2>
						<h4>Centro Escolar La Ponderosa</h4>
						<i><h6>Instruye al niño en su camino, y aun cuando fuera viejo no se apartara de el</h6></i>
					</div>
					<hr style="width: 100%; color: black; height: 1px; background-color:black;" /> 
				</div>
				<div class="container">
					<div id="accordion">
					  <div class="card">
						<div class="card-header" id="headingOne" style="background:#b3e5fc;">
						  <h5 class="mb-0">
							<p class="endpoints" style="color:black;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							  <b>Usuarios</b>
							</p>
						  </h5>
						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						  <div class="card-body" style="background:#e1f5fe;">
							 <table class="table table-sm table-dark table-hover">
								<tr>
									<td><a href="<?php echo $servidor;?>all_users" target="blank"><code>/all_users</code></a></td>
									<td></td>
									<td><p class="text-warning">GET</p></td>
									<td>Obtiene todos los usuarios del sistema</td>
								</tr>
								<tr>
									<td><a href="<?php echo $servidor;?>find_user" target="blank"><code>/find_user</code></a></td>
									<td> $id_usuario </td>
									<td><p class="text-warning">GET</p></td>
									<td>Busca un usuario por su identificador</td>
								</tr>
								<tr>
									<td><a href="<?php echo $servidor;?>new_user" target="blank"><code>/new_user</code></a></td>
									<td> $usuario , $nombre , $apellido , $clave </td>
									<td><p class="text-info">POST</p></td>
									<td>Crea un nuevo usuario en sistema</td>
								</tr>
								<tr>
									<td><a href="<?php echo $servidor;?>delete_user" target="blank"><code>/delete_user</code></a></td>
									<td> $id_usuario </td>
									<td><p class="text-info">POST</p></td>
									<td>Elimina un usuario determinado</td>
								</tr>
								<tr>
									<td><a href="<?php echo $servidor;?>update_user" target="blank"><code>/update_user</code></a></td>
									<td> $id_usuario , $nombre , $apellido , $clave</td>
									<td><p class="text-info">POST</p></td>
									<td>Actualiza la informacion de un determinado usuario</td>
								</tr>
							</table>
						  </div>
						</div>
					  </div>
					</div>				
				</small>
			</div>
		<hr style="width: 100%; color: black; height: 1px; background-color:black;" /> 
		<p><b>Contacto: celp_soporte_ti@mail.com</b></p>
	<body>
</html>
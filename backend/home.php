<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Traductor - Diccionario</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	<!-- Template Styles -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- CSS Reset -->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="css/milligram.min.css">
	<!-- Main Styles -->
	<link rel="stylesheet" href="css/styles.css">
	<!-- Bootstrap CSS
	<link rel="stylesheet" href="bootstrap\css\bootstrap.css">
	-->
	<!-- Bootstrap JS 
	<script src="bootstrap\js\bootstrap.css"></script>
	-->
	<!-- JQuery 
	<script src="javascript/jquery-3.6.0.js"></script>
	-->
	<link rel="stylesheet" href="css/home.css">
</head>

<body>
<div class="background">
	<div class="navbar">
		<div class="row">
			<div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Diccionario - Traductor</a></div>
			<div class="column column-40 col-search">
				<input type="text" name="" value="" placeholder="Buscar..." />
			</div>
			<div class="column column-30">
				<div class="user-section"><a href="#">
					<img src="css/img/foto_usuario.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4>Admin</h4>
						<p>Administrator</p>
					</div>
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column">
			<h5>Opciones</h5>
			<ul>
				<li><a href="#"></em> Inicio</a></li>
				<li><a href="#idiomas"> Lenguajes</a></li>
				<li><a href="#dashboard"> Dashboard</a></li>
				<li><a href="#forms"> Usuarios</a></li>
				<li><a href="#tables"> Diccionario</a></li>				
				<li><a href="index.php"> Cerrar sesión</a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<div class="row grid-responsive">
				<div class="column page-heading">
					<div class="large-card">
						<h1>Bienvenido!</h1>
						<p class="text-large">Este sitio se encarga de manejar la base de datos del proyecto Diccionario - Traductor</p>
						<p>Si desea entrar al proyecto. </p>
						<a class="button" href='http://localhost:4200/'>Ir al sitio</a>
					</div>
				</div>
			</div>
			<!--Idiomas-->
			<h5 class="mt-2">Lenguajes</h5><a class="anchor" name="idiomas"></a>
			<div class="row grid-responsive mt-1">
				
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Agregar Lenguajes</h3>
						</div>
						<div class="card-block">
							<form action="insertar_dialecto.php" method="post">
								<fieldset>
									<label for="nameField">Nombre</label>
									<input type="text" placeholder="Nombre de usuario" id="nameField" name="nombre">
									<input type="submit" class="button" >
								</fieldset>
							</form>
						</div>
					</div>
						
				</div>
				<div class="column">
					<div class="card">
						<div class="card-title">
							<h2 class="float-left">Lenguajes</h2>
							<!--<div class="badge float-right">Cantidad de palabras</div>-->
							<!--<div class="badge background-success float-right mr-1">5 Complete</div>-->
							<div class="clearfix"></div>
						</div>
						<div class="card-block progress-bars">
							<table>
									<thead>
										<tr>
											<th>Clave Idioma</th>
											<th>Idioma</th>
											<th>Mostrar</th>
											<th>Acciones</th>
										</tr>
									</thead>
									<tbody>
										<?php
											include('db.php');
											$sql="SELECT * from dialectos";
											$resul=mysqli_query($conexion,$sql);

											while($mostrar=mysqli_fetch_array($resul)){
												?>
										<tr>
											<td><?php echo $mostrar['Id_dialecto'] ?></td>
											<td><?php echo $mostrar['Dialecto'] ?></td>
											<td><?php echo $mostrar['mostrar'] ?></td>
											<td><a class="button button-outline" href="mostrar_dialecto.php?id=<?php echo $mostrar['Id_dialecto']?>">Mostrar</a> <a class="button button-outline" href="ocultar_dialecto.php?id=<?php echo $mostrar['Id_dialecto']?>">Ocultar</a></td>
										</tr>
										<?php
											}
										?>
									</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<!--Dashboard-->
			<h5>Dashboard</h5><a class="anchor" name="dashboard"></a>
			<div class="row grid-responsive">
				<div class="column column-50">
					<div class="card">
						
						<div class="card-title">
							<h2>Espacio para dashboard</h2>
						</div>
						<div class="card-block">
							<!--
							<div class="canvas-wrapper">
								<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
							</div>
							-->
						</div>
						
					</div>
				</div>
				<div class="column column-50">
					<div class="card">
						
						<div class="card-title">
							<h2>Espacio para dashboard</h2>
						</div>
						<div class="card-block">
							<!--
							<div class="canvas-wrapper">
								<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
			
			<!--Usuarios-->
			<h5 class="mt-2">Usuarios</h5><a class="anchor" name="forms"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Gestionar usuarios</h3>
						</div>
						<div class="card-block">
							<form action="insertar_user.php" method="post">
								<fieldset>
									<label for="nameField">Nombre</label>
									<input type="text" placeholder="Nombre de usuario" id="nameField" name="user">
									<label for="ageRangeField">Contraseña</label>
									<input type="password" placeholder="Ingrese su contraseña" id="nameField" name="pass">
									<label for="commentField">Correo electronico</label>
									<input type="email" placeholder="Ingrese su email" id="nameField" name="mail">
									<input type="submit" class="button" >
								</fieldset>
							</form>
						</div>
					</div>
					
				</div>

				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Consulta de usuarios</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>Clave</th>
										<th>Nombre</th>
										<th>Contraseña</th>
										<th>Correo</th>
										<th>Activo</th>
										<th>Acción</th>
									</tr>
								</thead>
			
								<tbody>
									<?php
									include('db.php');
									$sql="SELECT * from usuarios";
									$resul=mysqli_query($conexion,$sql);

									while($mostrar=mysqli_fetch_array($resul)){
										?>		
									<tr name='registros_usuario'>
										<td><?php echo $mostrar['Id_usuario'] ?></td>
										<td><?php echo $mostrar['Usuario'] ?></td>
										<td><?php echo $mostrar['Contraseña'] ?></td>
										<td><?php echo $mostrar['email'] ?></td>
										<td><?php echo $mostrar['usuario_activo'] ?></td>
										<td><button class="button button-outline">Modificar</button></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Ejemplos de botones
			<h5 class="mt-2">Buttons</h5><a class="anchor" name="buttons"></a>
			<div class="row grid-responsive">
				<div class="column">
					<a class="button" href="#">Default Button</a>
					
					<button class="button button-outline">Outlined Button</button>
					
					<input class="button button-clear" type="submit" value="Clear Button">
				</div>
			</div>
			-->
			
			<!--Diccionario-->
			<h5 class="mt-2">Diccionario</h5><a class="anchor" name="tables"></a>
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Agregar Palabra</h3>
						</div>
						<div class="card-block">
							<form action="insertar_palabra.php" method="post">
								<fieldset>
									<label for="nameField">Idioma</label>
									<select name="combo">
										<?php
											include('db.php');
											$sql="SELECT * from dialectos WHERE mostrar = 'S'";
											$resul=mysqli_query($conexion,$sql);

											while($mostrar=mysqli_fetch_array($resul)){
										?>
										<option value="<?php echo $mostrar['Id_dialecto'] ?>" name="id_dialecto"><?php echo $mostrar['Dialecto'] ?></option>
									    <?php
										}
										?>
									</select>
									
									<label for="nameField">Palabra</label>
									<input type="text" placeholder="Palabra en dialecto" id="nameField" name="palabra">

									<label for="nameField">Traducción</label>
									<input type="text" placeholder="Palaba en español" id="nameField" name="traduccion">

									<input type="submit" class="button">
								</fieldset>
							</form>
						</div>
					</div>	
				</div>
				<div class="column ">
					<div class="card">
						<div class="card-title">
							<h3>Idiomas</h3>
						</div>
						<div class="card-block">
							<table>
								<thead>
									<tr>
										<th>Clave Idioma</th>
										<th>Idioma</th>
										<th>Palabras</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<?php
										include('db.php');
										$sql="SELECT * from dialectos WHERE mostrar = 'S'";
										$resul=mysqli_query($conexion,$sql);

										while($mostrar=mysqli_fetch_array($resul)){
											?>
									<tr>
										<td><?php echo $mostrar['Id_dialecto'] ?></td>
										<td><?php echo $mostrar['Dialecto'] ?></td>
										<td></td>
										<td><input type="checkbox" id="btn-modal"><label for="btn-modal" class="lbl-modal">Mostrar diccionario</label></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	

	<!-- Modal <button class="button button-outline" >Mostrar diccionario</button> -->
	
	
	<div class="modal">

		<div class="contenedor">

			<header>Mostrar palabras</header>
			<label for="btn-modal">X</label>
			<div class="contenido">

			</div>

		</div>

	</div>

	<script src="javascript/chart.min.js"></script>
	<script src="javascript/chart-data.js"></script>		
</div>
</body>
</html> 
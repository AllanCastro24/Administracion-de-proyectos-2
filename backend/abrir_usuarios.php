<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar usuarios</title>
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

	<!-- Bootstrap CSS Se comentaron por que choca con las otras librerías de diseño
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	-->
	<!-- Bootstrap JS 
	<script src="bootstrap/js/bootstrap.js"></script>
	-->

	<!-- JQuery -->
	<script src="javascript/jquery-3.6.0.min.js"></script>
	<!-- Plotly -->
	<script src="javascript/plotly-2.6.3.min.js"></script>
</head>
<body>
    <div class="background">
        <div class="navbar">
            <div class="row">
                <div class="column column-30 col-site-title"><a href="#" class="site-title float-left">Diccionario - Traductor</a></div>
                <div class="column column-40 col-search">
                    <!--<input type="text" name="" value="" placeholder="Buscar..." />-->
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
                    <li><a href="home.php"></em> Volver</a></li>
                </ul>
            </div>
            <section id="main-content" class="column column-offset-20">
                
                <!--Usuarios-->
                <h5 class="mt-2">Total de usuarios</h5><a class="anchor" name="forms"></a>
                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Gestionar usuarios</h3>
                            </div>
                            <div class="card-block">
                                <form action="modificar_user.php" method="post">
                                    <fieldset>
                                        <label for="">Clave</label>
                                        <input type="text" placeholder="Clave de usuario" id="nameField" name="clave" value="<?php echo $_GET['id'] ?>">
                                        <label for="">Nombre</label>
                                        <input type="text" placeholder="Nombre de usuario" id="nameField" name="user" value="<?php echo $_GET['nombre'] ?>">
                                        <label for="ageRangeField">Contraseña</label>
                                        <input type="password" placeholder="Ingrese su contraseña" id="nameField" name="pass" value="<?php echo $_GET['pass'] ?>">
                                        <label for="commentField">Correo electronico</label>
                                        <input type="email" placeholder="Ingrese su email" id="nameField" name="mail" value="<?php echo $_GET['mail'] ?>" >
                                        <input type="submit" class="button" value="Actualizar datos">
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Consulta de diccionario</h3>
                            </div>
                            <div class="card-block">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Cargar</th>
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
                                            <td><a class="button button-outline" href="abrir_usuarios.php?id=<?php echo $mostrar['Id_usuario'] ?>&nombre=<?php echo $mostrar['Usuario'] ?>&pass=<?php echo $mostrar['Contraseña'] ?>&mail=<?php echo $mostrar['email'] ?>">i</a></td>
                                            <td><?php echo $mostrar['Id_usuario'] ?></td>
                                            <td><?php echo $mostrar['Usuario'] ?></td>
                                            <td><?php echo $mostrar['Contraseña'] ?></td>
                                            <td><?php echo $mostrar['email'] ?></td>
                                            <td><?php echo $mostrar['usuario_activo'] ?></td>
                                            <td><a class="button button-outline" href="mostrar_user.php?id=<?php echo $mostrar['Id_usuario'] ?>">Mostrar</a> <a class="button button-outline" href="ocultar_user.php?id=<?php echo $mostrar['Id_usuario'] ?>">Ocultar</a> <a class="button button-outline" href="borrar_user.php?id=<?php echo $mostrar['Id_usuario'] ?>">Borrar</a></td>
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
        <script src="javascript/chart.min.js"></script>
        <script src="javascript/chart-data.js"></script>		
    </div>
</body>
</html>
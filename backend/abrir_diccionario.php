<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar diccionario</title>
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
                <h5 class="mt-2">Diccionario completo</h5><a class="anchor" name="forms"></a>
                <div class="row grid-responsive">
                    <div class="column ">
                        <div class="card">
                            <div class="card-title">
                                <h3>Gestionar palabras</h3>
                            </div>
                            <div class="card-block">
                                <form action="modificar_palabra.php" method="post">
                                    <fieldset>
                                        <label for="">Clave</label>
                                        <input type="text" placeholder="Clave de palabra" id="nameField" name="clave">
                                        <label for="">Palabra</label>
                                        <input type="text" placeholder="Palabra en dialecto" id="nameField" name="palabra">
                                        <label for="">Traducción</label>
                                        <input type="text" placeholder="Palabra en español" id="nameField" name="traduccion">
                                        <input type="submit" class="button" value="Modificar palabra">
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
                                            <th>Palabra</th>
                                            <th>Traducción</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                
                                    <tbody>
                                        <?php
                                        include('db.php');
                                        $clave_dialecto=$_GET['id'];
                                        $sql="SELECT * from diccionario WHERE Id_dialecto=$clave_dialecto";
                                        $resul=mysqli_query($conexion,$sql);

                                        while($mostrar=mysqli_fetch_array($resul)){
                                            ?>		
                                        <tr name='registros_usuario'>
                                            <td><a class="button button-outline" href="">i</a></td>
                                            <td><?php echo $mostrar['Id_diccionario'] ?></td>
                                            <td><?php echo $mostrar['Palabra'] ?></td>
                                            <td><?php echo $mostrar['Traduccion'] ?></td>
                                            <td><a class="button button-outline" href="borrar_palabra.php?id=<?php echo $mostrar['Id_diccionario'] ?>" >Borrar</a></td>
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
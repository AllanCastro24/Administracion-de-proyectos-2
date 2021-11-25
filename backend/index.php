<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend </title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    
    <div class = "caja_login">
        <img class="foto_usuario" src="css/img/foto_usuario.png" alt="foto_usuario">
        <h1>Iniciar Sesión</h1>
        <script src="javascript/login.js"></script>
        
        <form action="validar.php" method="post" id="formulario">
            <label for="username">Usuario</label>
            <input type="text" id="user" placeholder="Nombre de usuario" name="usuario" required>

            <label for="password">Contraseña</label>
            <input type="password" id="pass" placeholder="Ingresa la contraseña" name="contrasenya" required> <input type="checkbox" id="cb_pass" onclick="mostrarContrasena()" value="Mostrar contraseña">
            
            <input type="submit" value="Entrar" onclick="login()">
            <input type="submit" onclick="limpiar_formulario()" value="Reiniciar">
        
        </form>
    </div>

    <footer>Traductor - Diccionario 2021 (Administrador de base de datos)</footer><br><br><br>
</body>

</html>
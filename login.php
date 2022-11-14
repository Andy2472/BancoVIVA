<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagenes/" type="image/x-icon">
    <link rel="stylesheet" href="sesion_registro.css">
    <script src="https://kit.fontawesome.com/d0e34edc11.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="imagenes/logito.png" type="image/x-icon">
    <title>Inicia sesion</title>
</head>
<body>
    <form action="validar.php" method="POST">
    <h1>Inicia sesion</h1>
    <input type="email" name="correo" placeholder="Ingresa su correo">
    <input type="password" name="contraseña" placeholder="Ingresa su contraseña">
    <h4>Estoy de acuerdo con los <a href="#">Terminos y condiciones</a></h4>
    <input type="submit" name="Enviar" value="Ingresar">
    <a href="registro.php">¿No tienes cuenta?</a>

    <a href="index.html"> <i class="fa-solid fa-house"></i><!-- BancoVIVA --></a>
    </form>




</body>
</html>
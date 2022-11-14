<?php
$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


session_start();
$_SESSION['correo']=$correo;

include('conexion.php');
include('login.php');

$consulta = "SELECT*FROM usuarios WHERE correo = '$correo' and contraseña = '$contraseña' ";

$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if ($filas){
    header("location:index.html"); /* Cambiar la ruta de ingreso para el usuario */
}else{
    ?>
    <h1 class="mal">Error en la autenticacion</h1>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);


?>
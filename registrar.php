<?php
include ("conexion.php");


if (isset ($_POST ['Enviar'])){
    if (strlen($_POST['nombres'])>=1 && strlen ($_POST ["apellidos"])>=1 && strlen ($_POST ["correo"])
    >=1 && strlen ($_POST ["contraseña"])>=1)
    {
        $nombres = trim($_POST['nombres']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $contraseña = trim($_POST['contraseña']);

        $consulta = "INSERT INTO `usuarios`(nombres, apellidos, correo, contraseña) VALUES ('$nombres','$apellidos','$correo','$contraseña')";


        $verificar_usuario = mysqli_query($conexion, "SELECT*FROM usuarios WHERE correo = '$correo'");
        if (mysqli_num_rows($verificar_usuario)>0){
            ?>
                <h1 class="mal">El usuario ya está registrado</h1>

            <?php
            exit;
        }


        $resultado = mysqli_query($conexion, $consulta);



        if ($resultado){
            ?>
                <h1 class="bien">¡Usuario registrado!</h1>
            <?php
        }else{
            ?>
            <h1 class="mal">¡Ha ocurrido un error!</h1>
        <?php
        }
    }else{
        ?>
        <h1 class="mal">Complete los campos</h1>
    <?php
    }  
}






?>


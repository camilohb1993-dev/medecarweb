<?php

$conexion = mysqli_connect("localhost","root","","login");

$usuario = $_REQUEST['usuario'];
$contrasena = $_REQUEST['contrasena'];

$sql = "SELECT * FROM usuarios 
        WHERE usuario='$usuario' 
        AND contrasena='$contrasena'";

$resultado = mysqli_query($conexion,$sql);

if(mysqli_num_rows($resultado)>0){

    echo "Bienvenido ".$usuario;

}else{

    echo "Usuario o contraseña incorrectos";

}

?>
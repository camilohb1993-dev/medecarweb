


<?php

$conexion = new mysqli("localhost","root","","taller");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$id = $_POST['id'];

$sql = "DELETE FROM trabajo WHERE empleado = '$id'";

if ($conexion->query($sql) === TRUE) {
    header("Location: datos.php"); // redirige a otra página
    exit();
    
} 
else {
    echo "Error al eliminar: " . $conexion->error;
}

$conexion->close();

?>
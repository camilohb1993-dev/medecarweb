<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "taller";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if(isset($_POST['empleado']) && isset($_POST['id'])){

    $empleado= $_POST['empleado'];
    $id = $_POST['id'];

    $stmt = $conn->prepare("UPDATE trabajo SET empleado = ? WHERE cedula = ? ");
    $stmt->bind_param("ss", $empleado, $id);

    if ($stmt->execute()) {
        header("Location: datos.php"); // redirige a otra página
        exit();
    } else {
        echo "Error al actualizar: " . $stmt->error;
    }

    $stmt->close();
}else{
    echo "No se recibieron datos del formulario.";
}

$conn->close();

?>


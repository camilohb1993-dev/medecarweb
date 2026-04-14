<?php

$conexion = mysqli_connect("localhost", "root", "", "taller");

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}


$empleado      = $_POST['empleado'];
$cedula        = $_POST['cedula'];
$repuesto      = $_POST['repuesto'];
$modelo        = $_POST['modelo'];
$pagoemp  = $_POST['pagoemp']; 
$placa         = $_POST['placa'];


$stmt = mysqli_prepare(
    $conexion,
    "INSERT INTO trabajo (empleado, cedula, repuesto, modelo, pagoemp, placa) 
     VALUES (?, ?, ?, ?, ?, ?)"
);


mysqli_stmt_bind_param($stmt, "ssssss", $empleado, $cedula, $repuesto, $modelo, $pagoemp, $placa);

// 5️⃣ Ejecutar la consulta
if (mysqli_stmt_execute($stmt)) {
    header("Location: datos.php"); // redirige a otra página
    exit();
} else {
    echo "Error al guardar: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conexion);
?>

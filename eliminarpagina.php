<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Eliminar Registro</title>
</head>
<body>
    <style>
body{
    	background-image: url('taller.png');
			 background-size: cover; 
  background-repeat: no-repeat; 
  background-attachment: fixed; 
  background-position: center;.

}
nav a{
    color: black;
    text-decoration:none;
    margin:0 15px;
    font-weight:bold;
}

</style>
<h2>Eliminar registro de la base de datos</h2>

<form action="eliminar.php" method="POST">

<label>empleado  del registro a eliminar:</label>
<input type="text" name="id" required>

<br><br>

<button type="submit">Eliminar</button>
<br><br>
<nav>
<button><a href="datos.php">datos</a></button>
</nav> <br><br>
<nav>
<button><a href="principal.php">principal</a></button>
</nav> <br><br>

</form>

</body>

</html>
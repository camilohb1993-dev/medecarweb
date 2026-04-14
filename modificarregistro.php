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

<form action="modificar.php" method="post">

<label>Id del empleado:</label>
<input type="text" name="empleado" required>

<label>Nuevo nombre:</label>
<input type="text" name="id" required>

<input type="submit" value="Actualizar">

<nav>
<button><a href="datos.php">datos</a></button>
</nav> <br><br>

<nav>
<button><a href="principal.php">principal</a></button>
</nav> <br><br>

</form>

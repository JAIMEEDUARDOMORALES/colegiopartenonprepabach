<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "usuarios_partenon";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión con la base de datos. Error: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE USUARIO = '".$nombre."' and PASSWORD = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: principal.php");
	//echo "Bienvenido:" .$nombre;
}

else if($nr == 0){
	echo "No ingreso";
}



?>
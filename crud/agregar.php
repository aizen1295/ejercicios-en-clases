<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$con = conectar();
$sql = "INSERT INTO usuarios (nombre, usuario ,contrasena, direccion, edad, genero) values ('$nombre', '$usuario', '$contrasena', '$direccion', '$edad', '$genero') ";
$result = mysqli_query($con, $sql);

header("Location:usuarios.php");

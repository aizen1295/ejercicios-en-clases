<?php
include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
$con = conectar();
$sql = "UPDATE usuarios SET nombre='$nombre', usuario='$usuario' ,contrasena='$contrasena', direccion='$direccion', edad='$edad', genero='$genero' WHERE id_usuario='$id' ";
$result = mysqli_query($con, $sql);

header("Location:usuarios.php");
<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$con = conectar();
$sql = "INSERT INTO productos (nombre, valor) values ('$nombre', '$valor') ";
$result = mysqli_query($con, $sql);

header("Location:productos.php");

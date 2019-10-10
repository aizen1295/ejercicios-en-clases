<?php
include 'conexion.php';
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$valor = $_POST['valor'];
$con = conectar();
$sql = "UPDATE productos SET nombre='$nombre', valor='$valor' WHERE id_producto='$id' ";
$result = mysqli_query($con, $sql);

header("Location:productos.php");
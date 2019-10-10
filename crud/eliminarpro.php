<?php
include 'conexion.php';
$id = $_REQUEST['ID'];
$con = conectar();
$sql = "DELETE FROM productos WHERE id_producto = $id;";
$result = mysqli_query($con, $sql);

header("Location:productos.php");

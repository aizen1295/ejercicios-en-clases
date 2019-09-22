<?php
include 'conexion.php';
$id = $_REQUEST['ID'];
$con = conectar();
$sql = "DELETE FROM usuarios WHERE id_usuario = $id;";
$result = mysqli_query($con, $sql);

header("Location:usuarios.php");

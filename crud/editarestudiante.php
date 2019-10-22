<?php
include 'conexion.php';

$id = $_POST['id'];
$materia = $_POST['materia'];
$docente = $_POST['docente'];

$con = conectar();
$sql = "UPDATE asigna_estudiante SET materia='$materia', docente='$docente' WHERE id_asigna='$id' ";
$result = mysqli_query($con, $sql);

header("Location:estudiante.php");

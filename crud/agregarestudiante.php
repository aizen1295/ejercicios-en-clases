<?php
include 'conexion.php';

$materia = $_POST['materia'];
$docente = $_POST['docente'];
$id = $_POST['id'];
$con = conectar();
$sql = "INSERT INTO asigna_estudiante (id_estudiante,materia, docente) values ('$id','$materia', '$docente') ";
$result = mysqli_query($con, $sql);

header("Location:estudiante.php");

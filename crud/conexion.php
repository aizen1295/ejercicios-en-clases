<?php
function conectar()
{
    $host = 'localhost';
    $user = 'root';
    $contra = '';
    $db = 'prueba';

    $con = mysqli_connect($host, $user, $contra) or die("error" . mysql_error());
    mysqli_select_db($con, $db);

    return $con;

}


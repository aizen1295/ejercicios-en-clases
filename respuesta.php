<?php
if($_POST){
    $numero1= $_POST['num1'];
    $numero2= $_POST['num2'];

    if ($numero1 < $numero2) {
        echo "$numero1 es el mumero menor <br>";
        echo "$numero2 es el numero mayor";
    }
    elseif($numero1>$numero2){
        echo "$numero1 es el numero mayor <br>";
        echo" $numero2 es el mumero menor";
    }
    else{
        echo "los numeros $numero1 y $numero2 son iguales";
    }
}
else{
    echo"no hay post";
}
?>
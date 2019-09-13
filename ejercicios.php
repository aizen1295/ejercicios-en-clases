<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fatorial</title>
</head>

<body>
    <form method="" action="">
        <label for="numero"></label>
        <input type="text" name="numero" id="numero" placeholder="ingrese un numero">
        <button type="submit">calcular</button>
        <br>

        <?php

        $num = $_REQUEST['numero'];

        if ($num % 2 != 0) {
            for ($i = $num; $i > 1; $i--) {
                if ($i % 2 == 0) {
                    for ($j = $num - $i; $j > 0; $j--) {
                        echo  "*&nbsp&nbsp&nbsp";
                    }
                }

                echo "<br>";
            }
            echo "<br>";
            for ($i = 0; $i < $num; $i++) {
                echo  "*&nbsp&nbsp&nbsp";
            }
            echo "<br>";

            for ($i = 1; $i < $num; $i++) {
                if ($i % 2 == 0) {
                    for ($j = $i; $j < $num; $j++) {
                        echo  "*&nbsp&nbsp&nbsp";
                    }
                }
                echo "<br>";
            }
        } else {
            echo "digite un numero impar";
        }

        ?>


    </form>
</body>

</html>
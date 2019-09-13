<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>piramide</title>
</head>

<body>
    <h1>
        <center>digite un numero</center>
    </h1>

    <div class="row">
        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>

        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
            <form method="" action="">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Número 1</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese número 1"
                        name="numero">
                </div>

                <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>

            </form>
        </div>

        <div class="col-12 col-xd-4 col-md-4 col-lg-4">
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

    <br>

<?php

$num = $_REQUEST['numero'];
$a = $num ;

if ($num % 2 != 0) {
    for ($i = 0; $i < $num; $i++) {
        if ($a==$num) {
            $a = $a -1;
        }
        else {
            $a = $a -2;
        }
        if ($a>=0) {
            for ($j = $num-$a; $j > 0; $j--) {
                echo  "*&nbsp&nbsp&nbsp";
                
            }
            
        }
        else {
            for ($j = 0-$a; $j < $num; $j++) {
                echo  "*&nbsp&nbsp&nbsp";
                
            }
            
        }
        echo $a;        
        echo "<br>";
    }
    
} else {
    echo "digite un numero impar";
}

?>



</form>
</body>

</html>
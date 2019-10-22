<?php include "conexion.php";?>
<!doctype html>
<html lang="en">

<head>
  <title>tabla estudiantes</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">mi proyecto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="productos.php">productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">usuairos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="estudiante.php">estudiantes</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="col my-2">
    <h1>Estudiantes</h1>
  </div>


    <table class="table">
      <thead>

        <tr>
            <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">direccion</th>
          <th scope="col">telefono</th>
        </tr>
      </thead>
      <tbody>

          <?php

$con = DB();
$sql = "SELECT * FROM estudiantes";
$result = mysqli_query($con, $sql);
while ($file = mysqli_fetch_array($result)) {
    ?>

        <tr>
          <th  scope="row"><?php echo $file['id_estudiante'] ?></th>
          <td><?php echo $file['nombre'] ?></td>
          <td><?php echo $file['direccion'] ?></td>
          <td><?php echo $file['telefono'] ?></td>
          <td>
          <td>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modalasignar<?php echo $file['id_estudiante'] ?>">asignar</a>

          </td>

        </tr>
        <div class="modal fade" id="modalasignar<?php echo $file['id_estudiante'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">asignar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="container">
                  <form action="agregarestudiante.php" method="post" >
                  <div class="container">
                                <div class="form-group">
                                  <input type="text" name="materia" id="" class="form-control" placeholder="materia" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="docente" id="" class="form-control" placeholder="docente" >
                                </div>
                                <input type="hidden" value="<?php echo $file['id_estudiante'] ?>" name="id">
                              </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info">asignar</button>
                </div>
              </form>
              </div>
            </div>
          </div>


            <?php
}

?>

      </tbody>
    </table>
  </div>

  <table class="table">
      <thead>

        <tr>
            <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">direccion</th>
          <th scope="col">telefono</th>
          <th scope="col">materia</th>
          <th scope="col">docente</th>
        </tr>
      </thead>
      <tbody>

          <?php

$con = conectar();
$sql = "SELECT a.id_asigna,e.id_estudiante,e.nombre,e.direccion,e.telefono,a.materia,a.docente
FROM estudiantes e,asigna_estudiante a
WHERE e.id_estudiante=a.id_estudiante";
$result = mysqli_query($con, $sql);
while ($file = mysqli_fetch_array($result)) {
    ?>

        <tr>
          <th  scope="row"><?php echo $file['id_asigna'] ?></th>
          <td><?php echo $file['nombre'] ?></td>
          <td><?php echo $file['direccion'] ?></td>
          <td><?php echo $file['telefono'] ?></td>
          <td><?php echo $file['materia'] ?></td>
          <td><?php echo $file['docente'] ?></td>
          <td>
          <td>
            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#modaleditar<?php echo $file['id_asigna'] ?>">modificar</a>

          </td>

        </tr>
        <div class="modal fade" id="modaleditar<?php echo $file['id_asigna'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">modificar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="container">
                  <form action="editarestudiante.php" method="post" >
                  <div class="container">
                                <div class="form-group">
                                <div class="form-group">
                            <input type="text" value="<?php echo $file['materia'] ?>" name="materia" id="" class="form-control" placeholder="materia" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['docente'] ?>" name="docente" id="" class="form-control" placeholder="docente" >
                          </div>
                          <input type="hidden" value="<?php echo $file['id_asigna'] ?>" name="id">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">modificar</button>
                </div>
              </form>
              </div>
            </div>
          </div>


            <?php
}

?>

      </tbody>
    </table>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
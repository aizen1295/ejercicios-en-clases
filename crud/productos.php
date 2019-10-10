<?php include "conexion.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>tabla productos</title>
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
          <a class="nav-link" href="#">productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">usuairos</a>
        </li>
      </ul>
    </div>
  </nav>
    <h1>productos</h1>
    <div class="container">
        <a href="#" class="btn btn-success" type="button"data-toggle="modal" data-target="#modalagregar">agregar</a>
        <div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">agregar producto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                      <form action="agregarpro.php" method="post" >
                              <div class="container">
                                <div class="form-group">
                                  <input type="text" name="nombre" id="" class="form-control" placeholder="nombre" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="valor" id="" class="form-control" placeholder="valor" >
                                </div>

                              </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" >agregar</button>
                    </div>
                      </form>
              </div>
            </div>
          </div>
    <table class="table">
      <thead>

        <tr>
          <th scope="col">id</th>
          <th scope="col">nombre</th>
          <th scope="col">valor</th>

        </tr>
      </thead>
      <tbody>

          <?php

$con = conectar();
$sql = "SELECT * FROM productos";
$result = mysqli_query($con, $sql);
while ($file = mysqli_fetch_array($result)) {
    ?>

        <tr>
          <th scope="row"><?php echo $file['id_producto'] ?></th>
          <td><?php echo $file['nombre'] ?></td>
          <td><?php echo $file['valor'] ?></td>
          <td>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modaleditar<?php echo $file['id_producto'] ?>">editar</a>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalelimina<?php echo $file['id_producto'] ?>">eliminar</a>
          </td>

        </tr>
        <div class="modal fade" id="modaleditar<?php echo $file['id_producto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">

                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">editar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <div class="container">
                  <form action="editarpro.php" method="post" >
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['nombre'] ?>" name="nombre" id="" class="form-control" placeholder="nombre" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['valor'] ?>" name="valor" id="" class="form-control" placeholder="valor" >
                          </div>
                          <input type="hidden" value="<?php echo $file['id_producto'] ?>" name="id">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-info">editar</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        <!-- Modal -->
          <div class="modal fade" id="modalelimina<?php echo $file['id_producto'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">eliminar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    quiere eliminar el producto
                    <?php echo $file['nombre'] ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="eliminarpro.php?ID=<?php echo $file['id_producto'] ?>" class="btn btn-danger">Eliminar</a>
                </div>
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

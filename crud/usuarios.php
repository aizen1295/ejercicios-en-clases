<?php include "conexion.php";?>
<!doctype html>
<html lang="en">

<head>
  <title>tabla usuario</title>
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
          <a class="nav-link" href="pedidos.php">pedidos</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="col my-2">
    <h1>usuarios</h1>
  </div>

  <div class="container">
        <a href="#" class="btn btn-success" type="button"data-toggle="modal" data-target="#modalagregar">agregar</a>
        <div class="modal fade" id="modalagregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">agregar usuario</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                      <form action="agregar.php" method="post" >
                              <div class="container">
                                <div class="form-group">
                                  <input type="text" name="nombre" id="" class="form-control" placeholder="nombre" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="usuario" id="" class="form-control" placeholder="usuario" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="contrasena" id="" class="form-control" placeholder="contraseña" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="direccion" id="" class="form-control" placeholder="direccion" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="edad" id="" class="form-control" placeholder="edad" >
                                </div>
                                <div class="form-group">
                                  <input type="text" name="genero" id="" class="form-control" placeholder="genero" >
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
          <th scope="col">usuario</th>
          <th scope="col">contrasena</th>
          <th scope="col">direccion</th>
          <th scope="col">edad</th>
          <th scope="col">genero</th>
          <th scope="col">rol</th>
        </tr>
      </thead>
      <tbody>

          <?php

$con = conectar();
$sql = "SELECT * FROM usuarios";
$result = mysqli_query($con, $sql);
while ($file = mysqli_fetch_array($result)) {
    ?>

        <tr>
          <th scope="row"><?php echo $file['id_usuario'] ?></th>
          <td><?php echo $file['nombre'] ?></td>
          <td><?php echo $file['usuario'] ?></td>
          <td><?php echo $file['contrasena'] ?></td>
          <td><?php echo $file['direccion'] ?></td>
          <td><?php echo $file['edad'] ?></td>
          <td><?php echo $file['genero'] ?></td>
          <td><?php echo $file['id_roles'] ?></td>
          <td>
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modaleditar<?php echo $file['id_usuario'] ?>">editar</a>
            <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#modalelimina<?php echo $file['id_usuario'] ?>">eliminar</a>  
          </td>

        </tr>
        <div class="modal fade" id="modaleditar<?php echo $file['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  <form action="editar.php" method="post" >
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['nombre'] ?>" name="nombre" id="" class="form-control" placeholder="nombre" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['usuario'] ?>" name="usuario" id="" class="form-control" placeholder="usuario" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['contrasena'] ?>" name="contrasena" id="" class="form-control" placeholder="contraseña" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['direccion'] ?>" name="direccion" id="" class="form-control" placeholder="direccion" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['edad'] ?>" name="edad" id="" class="form-control" placeholder="edad" >
                          </div>
                          <div class="form-group">
                            <input type="text" value="<?php echo $file['genero'] ?>" name="genero" id="" class="form-control" placeholder="genero" >
                          </div>
                          <input type="hidden" value="<?php echo $file['id_usuario'] ?>" name="id">
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
          <div class="modal fade" id="modalelimina<?php echo $file['id_usuario'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">eliminar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    quiere eliminar el usuario
                    <?php echo $file['nombre'] ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a href="eliminar.php?ID=<?php echo $file['id_usuario'] ?>" class="btn btn-danger">Eliminar</a>
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
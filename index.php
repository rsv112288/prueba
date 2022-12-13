<?php
    require('conexion.php');
    $sql = "SELECT id,nombre FROM PRUEBA";
    $resultado = mysqli_query($conexion,$sql);
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.dataTables.min.css">

    <title>PROYECTO</title>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
        $('#tabla').DataTable();
        });
    </script>
  </head>
  <body>
  <div class = "container">
      <div class = "row">
    <h1>REGISTRO</h1>

    <form id="registro" name="registro" method="POST" action="guardar.php" autocomplete="off">
  <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Introduce el id">
  </div>

  <div class="form-group">
    <label for="nombre">nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre">
  </div>

  <div class="form-group">
    <button class="control" id="registrar" name="Registrar" type="submit">Registrar</button>
  </div>

  <div class="new">
  <table id="tabla" class="display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
            </tr>
        </thead>
        <tbody>
            <?php while($fila = $resultado->fetch_assoc()){?>
            <tr>
                <td><?php echo $fila['id'] ?></td>
                <td><?php echo $fila['nombre'] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</form>
</div>
</div>
  </body>
</html>
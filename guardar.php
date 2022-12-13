<?php
    require 'conexion.php';

    $id = $_POST['id'];
    $nombre =  $_POST['nombre'];

    $sql = "INSERT INTO PRUEBA VALUES ('$id', '$nombre')";
    $resultado = mysqli_query($conexion,$sql);
    echo "<a href='index.php' class='btn registrar'>Regresar</a>";
?>
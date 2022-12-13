<?php
    $conexion=mysqli_init();
    mysqli_ssl_set($conexion,NULL,NULL,"ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
	mysqli_real_connect($conexion,"proyectoclo.mysql.database.azure.com","Rafa@proyectoclo","Rafita2288","proyecto", 3306);
?>

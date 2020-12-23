<?php 
    include("Conexion.php");
    $conexion=Conexion::conectarBaseDatos();
    $codigo=filter_input(INPUT_GET,'codigoCliente');
    $instruccionsql="DELETE FROM clientesbejob WHERE codigo=$codigo";
    $resultado=$conexion->query($instruccionsql);
    $resultado->execute();

    header("location: Index.php");

?>
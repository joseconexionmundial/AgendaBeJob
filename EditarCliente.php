<?php
    include("Conexion.php"); 
    $conexion=Conexion::conectarBaseDatos();

    $codigo=filter_input(INPUT_POST,'codigo');    
    $nombre=filter_input(INPUT_POST,'nombre');
    $apellidos=filter_input(INPUT_POST,'apellidos');
    $edad=filter_input(INPUT_POST,'edad');
    $dni=filter_input(INPUT_POST,'dni');
    $cumpleanos=filter_input(INPUT_POST,'cumpleanos');
    $colorfavorito=filter_input(INPUT_POST,'colorfavorito');
    $sexo=filter_input(INPUT_POST,'sexo');
    
    $instruccionsql="UPDATE clientesbejob SET nombre=:nombre, apellidos=:apellidos, 
    edad=:edad, dni=:dni, cumpleanos=:cumpleanos, colorfavorito=:colorfavorito, 
    sexo=:sexo WHERE codigo=$codigo";

    $prepara=$conexion->prepare($instruccionsql);
    $prepara->bindParam(':nombre',$nombre);
    $prepara->bindParam(':apellidos',$apellidos);
    $prepara->bindParam(':edad',$edad);
    $prepara->bindParam(':dni',$dni);
    $prepara->bindParam(':cumpleanos',$cumpleanos);
    $prepara->bindParam(':colorfavorito',$colorfavorito);
    $prepara->bindParam(':sexo',$sexo);

    $prepara->execute();
    header("location: Index.php");

?>
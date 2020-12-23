<?php
    include("Conexion.php");
    include("Persona.php");
    $conexion=Conexion::conectarBaseDatos();
    $persona=new Persona();
    
//----------------DATOS IMPORTADOS DE FORMULARIO ALTA CLIENTE---------------------------------------
    
    $nombre=filter_input(INPUT_POST,'nombre');
    $apellidos=filter_input(INPUT_POST,'apellidos');
    $edad=filter_input(INPUT_POST,'edad');
    $dni=filter_input(INPUT_POST,'dni');
    $cumpleanos=filter_input(INPUT_POST,'cumpleanos');
    $colorfavorito=filter_input(INPUT_POST,'colorfavorito');
    $sexo=filter_input(INPUT_POST,'sexo');

//---------------------------------------------------------------------------------------

    $persona->setNombre($nombre);
    $persona->setApellidos($apellidos);
    $persona->setEdad($edad);
    $persona->setDni($dni);
    $persona->setCumpleanos($cumpleanos);
    $persona->setColorFavorito($colorfavorito);
    $persona->setSexo($sexo);
    
    $instruccionsql="INSERT INTO clientesbejob (codigo, nombre, apellidos, edad, dni, 
    cumpleanos, colorfavorito, sexo) VALUES ('NULL', :nombre, :apellidos, :edad, 
    :dni, :cumpleanos, :colorfavorito, :sexo)";

    $resultado=$conexion->prepare($instruccionsql);

    $uno=$persona->getNombre();
    $dos=$persona->getApellidos();
    $tres=$persona->getEdad();
    $cuatro=$persona->getDni();
    $cinco=$persona->getCumpleanos();
    $seis=$persona->getColorFavorito();
    $siete=$persona->getSexo();

    $resultado->bindParam(':nombre',$uno);
    $resultado->bindParam(':apellidos',$dos);
    $resultado->bindParam(':edad',$tres);
    $resultado->bindParam(':dni',$cuatro);
    $resultado->bindParam(':cumpleanos',$cinco);
    $resultado->bindParam(':colorfavorito',$seis);
    $resultado->bindParam(':sexo',$siete);

    $resultado->execute();
    header("location: FormularioAltaCliente.php");
    
?>
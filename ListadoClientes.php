<?php
    include("Conexion.php");
    include("Persona.php");
    $conexion=Conexion::conectarBaseDatos();
    $listado=[];
    $instruccion="SELECT * FROM clientesbejob";
    $resultado=$conexion->query($instruccion);
    foreach($resultado->fetchAll() as $v){
        $persona=new Persona();
        $persona->setCodigo($v['codigo']);
        $persona->setNombre($v['nombre']);
        $persona->setApellidos($v['apellidos']);
        $persona->setEdad($v['edad']);
        $persona->setDni($v['dni']);
        $persona->setCumpleanos($v['cumpleanos']);
        $persona->setColorFavorito($v['colorfavorito']);
        $persona->setSexo($v['sexo']);
        $listado[]=$persona;
    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado clientes</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>CENTRO DE FORMACIÓN BEJOB</h1>
    <h2>LISTADO COMPLETO DE CLIENTES</h2>
    <p id="parrafo"><a href="index.php">Volver al Menú Principal</a></p>
    <form action="" method="post"></form>
    <table border="1">
        <tr id="primeralinea">    
            <th>Código</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th>D.N.I.</th>
            <th>F.Nacimiento</th>
            <th>Color favorito</th>
            <th>Sexo</th>
            <th colspan="2" align="center">Acción</th>
        </tr>
        <?php foreach($listado as $l){ ?>
        <tr>
            <td><?php echo $l->getCodigo();?></td>
            <td><?php echo $l->getNombre();?></td>
            <td><?php echo $l->getApellidos();?></td>
            <td><?php echo $l->getEdad();?></td>
            <td><?php echo $l->getDni(); ?></td>
            <td><?php echo $l->getCumpleanos();?></td>
            <td><?php echo $l->getColorFavorito();?></td>
            <td><?php echo $l->getSexo();?></td>
            <td><a href="BorrarCliente.php ?codigoCliente=<?php echo $l->getCodigo() ?>">Borrar</a></td>
            <td><a href="FormularioEditarCliente.php ?codigoCliente=<?php echo $l->getCodigo() ?>">Editar</a></td>
        </tr>

        <?php } ?>
    </table>


</body>
</html>
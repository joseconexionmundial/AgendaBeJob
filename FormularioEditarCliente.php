<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <style>
        #cssamarillo{
            background-color: yellowgreen;
        }
        
    </style>
</head>
<body>
    <?php 
        include("Conexion.php");
        include("Persona.php");
        $conexion=Conexion::conectarBaseDatos();
        $persona=new Persona();

        $codigo=filter_input(INPUT_GET,'codigoCliente');
        $persona->setCodigo($codigo);

        $instruccionsql="SELECT * FROM clientesbejob WHERE codigo=:clavecodigo";
        $resultado=$conexion->prepare($instruccionsql);
        $clave=$persona->getCodigo();
        $resultado->bindParam(':clavecodigo',$clave);
        $resultado->execute();
        $individual=$resultado->fetch();

        $persona->setNombre($individual['nombre']);
        $persona->setApellidos($individual['apellidos']);
        $persona->setEdad($individual['edad']);
        $persona->setDni($individual['dni']);
        $persona->setCumpleanos($individual['cumpleanos']);
        $persona->setColorFavorito($individual['colorfavorito']);
        $persona->setSexo($individual['sexo']);

    ?>    
<h1>CENTRO DE FORMACIÓN BEJOB</h1>
<h2>MODIFICAR DATOS DE CLIENTES</h2>
<p id="parrafo"><a href="index.php">Volver al menú principal</a></p>
    <form action="EditarCliente.php" method="post">
        <table align="center" id="tabla">
            <tr>
                <td>Código</td>
                <td><input id="cssamarillo" type="text" name="codigo" 
                value="<?php echo $persona->getCodigo() ?>" readonly="" size="7"></td>
            </tr>
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="nombre" 
                value="<?php echo $persona->getNombre() ?>" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,15}" 
                title="Introduzca solo texto"></td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td><input type="text" name="apellidos" 
                value="<?php echo $persona->getApellidos() ?>" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,25}" 
                title="Introduzca solo texto"></td>
            </tr>
            <tr>
                <td>Edad: </td>
                <td><input type="number" name="edad" value="<?php echo $persona->getEdad() ?>" 
                min="0" max="125" title="Introduzca un número entre 0 y 125"></td>
            </tr>
            <tr>
                <td>D.N.I.: </td>
                <td><input type="text" name="dni" value="<?php echo $persona->getDni() ?>" 
                maxlength="9"></td>
            </tr>
            <tr>
                <td>Fecha nacimiento: </td>
                <td><input type="date" name="cumpleanos" 
                value="<?php echo $persona->getCumpleanos() ?>" ></td>
            </tr>
            <tr>
                <td>Color favorito: </td>
                <td><input type="text" name="colorfavorito" 
                value="<?php echo $persona->getColorFavorito() ?>" 
                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,15}"></td>
            </tr>
            <tr>
                <td>Sexo </td>
                <td><input type="text" value="<?php echo $persona->getSexo() ?>" readonly="">
                    <select name="sexo">
                        <option><?php echo $persona->getSexo() ?></option>
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                        <option value="Otro">Otro</option>
                        <option value="No especificado">No especificado</option>
                    </select>
                </td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2" align="right" >
                    <input type="submit" value="Grabar">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button><a href="Index.php">Salir sin grabar</a></button>
                </td>    
            </tr>
        </table>
    </form>

</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de clientes</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1>CENTRO DE FORMACIÓN BEJOB</h1>
<h2>INTRODUCCIÓN DE CLIENTES</h2>
<p id="parrafo"><a href="index.php">Volver al menú principal</a></p>
    <form action="AltaCliente.php" method="post">
        <table align="center" id="tabla">
            <tr>
                <td>Nombre: </td>
                <td><input type="text" name="nombre" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,15}" title="Introduzca solo texto"></td>
            </tr>
            <tr>
                <td>Apellidos: </td>
                <td><input type="text" name="apellidos" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,25}" title="Introduzca solo texto"></td>
            </tr>
            <tr>
                <td>Edad: </td>
                <td><input type="number" name="edad" min="0" max="125" title="Introduzca un número entre 0 y 125"></td>
            </tr>
            <tr>
                <td>D.N.I.: </td>
                <td><input type="text" name="dni" maxlength="9"></td>
            </tr>
            <tr>
                <td>Fecha nacimiento: </td>
                <td><input type="date" name="cumpleanos" ></td>
            </tr>
            <tr>
                <td>Color favorito: </td>
                <td><input type="text" name="colorfavorito" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]{4,15}"></td>
            </tr>
            <tr>
                <td>Sexo </td>
                <td><select name="sexo">
                        <option value="hombre">Hombre</option>
                        <option value="mujer">Mujer</option>
                        <option value="otro">Otro</option>
                        <option value="noespecificado">No especificado</option>
                    </select>
                </td>
            </tr>
            <tr><td colspan="2"><hr></td></tr>
            <tr>
                <td colspan="2" align="right" >
                    <input type="submit" value="Grabar">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button><a href="Index.php">Salir sin grabar</a></button>
                </td>    
            </tr>
        </table>
    </form>
</body>
</html>
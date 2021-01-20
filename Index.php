<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Clientes BeJob</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <script>
        var x="background-image: url('tecnologiasinformaticas.jpg')";
        document.getElementById("cuerpo").innerHTML=x;
    </script>
</head>
<body id="cuerpo">
    
   <h1>CENTRO DE FORMACIÓN BEJOB</h1>
   <h3 style="text-align: center;">Agenda de clientes: menú principal</h3>
   <ul style="list-style-type: disc">
   <p>Prueba de tabla</p>
   <table align="center" id="tabla">
        <tr>
            <td><li id="lista"><a href="FormularioAltaCliente.php">Alta de clientes</a></li></td>
        </tr>
        <tr>
            <td><li id="lista"><a href="ListadoClientes.php">Listado de clientes</a></li></td>
        </tr>
        </ul>    
    </table>
    
</body>
 
</html>
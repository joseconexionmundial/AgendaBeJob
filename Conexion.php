<?php
    class Conexion{
        private static $conexion;
        public static function conectarBaseDatos(){
            try{
                $conexion=new PDO("mysql:host=localhost;dbname=agendabejob","root","");
                $conexion->exec("set names utf8");
                return $conexion;
            }catch(PDOException $e){
                echo ("Conexión NO establecida. Contactar con el administrador.") . $e->getMessage();
            }
            
        }
    }
?>

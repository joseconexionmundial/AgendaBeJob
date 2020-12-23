<?php 
class Persona{
    private $codigo;
    private $nombre;
    private $apellidos;
    private $edad;
    private $dni;
    private $cumpleanos;
    private $colorfavorito;
    private $sexo;

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }
    public function getCodigo(){
        return $this->codigo;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setApellidos($apellidos){
        $this->apellidos=$apellidos;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function setEdad($edad){
        $this->edad=$edad;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setDni($dni){
        $this->dni=$dni;
    }
    public function getDni(){
        return $this->dni;
    }
    public function setCumpleanos($cumpleanos){
        $this->cumpleanos=$cumpleanos;
    }
    public function getCumpleanos(){
        return $this->cumpleanos;
    }
    public function setColorFavorito($colorfavorito){
        $this->colorfavorito=$colorfavorito;
    }
    public function getColorFavorito(){
        return $this->colorfavorito;
    }
    public function setSexo($sexo){
        $this->sexo=$sexo;
    }
    public function getSexo(){
        return $this->sexo;
    }

}
 
?>
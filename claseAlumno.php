<?php

/**
 *
 */
class alumno{
  private $nombre = "Javi";
  private $edad = 12;
  private $curso = 1;
  private $ciclo = "Programacion";


    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function getCiclo(){
        return $this->ciclo;
    }


    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($setEdad){
      if ($setEdad>=18) {
        $this->edad = $setEdad;
    }elseif ($setEdad<18) {
      $this->edad = 18;
      echo "Esta forzado" . $this->edad . "<br>";
    }else {
      $this->edad == 18;
    }
    return $this;
    }

    public function setCurso($curso){
        if ($curso<=1) {
        $this -> curso = 1;
        echo "Esta forzado" . $this->curso . "<br>";
    }else {
      $this->curso = $curso;
    }
    return $this;
}
    public function setCiclo($ciclo){
        $this->ciclo = $ciclo;
    }

}



 ?>

<?php
include 'claseAlumno.php';

$mayorEdad=18;
$cursoUno=1;

$alumno = new alumno();
$alumno-> setEdad($mayorEdad);
$alumno -> setCurso($cursoUno);

$alumno->setEdad(13);
$alumno->setCurso(4);

?>

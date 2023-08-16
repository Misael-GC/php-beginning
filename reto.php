<?php
//Fácil
$nombre = "Carlos";
$apellido = "Gómez";
$edad = 18;
$aprobado =true;

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 1;

//Avanzado
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$michis = 3 + "5 michis";

//retos
var_dump($nombre, $apellido, $edad, $aprobado);
echo "\n";

var_dump($promedio, $nombre_completo, $presento_examen);
echo "\n";

var_dump($numero_preguntas, $numero_respuestas, $michis);
echo "\n";
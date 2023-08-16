<?php

$edades = [18, 22, 40, 34];

// count
//echo count($edades);

// array_push
array_push($edades, 15);

//var_dump($edades);


// is array: b¿ayuda a la hora de hacer peticiones y saber si es un arreglo u otra cosa

$no_es_arreglo = "";
// var_dump( is_array( $no_es_arreglo));
// var_dump( is_array( $edades));


//explode (separador, lista)
// $lista_frutas = "fresa,cereza,uvas";
// $lista_frutas_array = explode(",", $lista_frutas);


//implode
$lista_frutas_array = ["fresa","cereza","uvas"];  
$lista_frutas =  implode(",", $lista_frutas_array);
var_dump($lista_frutas);

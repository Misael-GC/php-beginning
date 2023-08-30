<?php

function arbolito(){
  $pisos = readline("Escribe el número de pisos: "); 
  $numeroDePisos = intval($pisos); //volvrmos numero el texto
  for($i=0; $i< $numeroDePisos; $i++){ // se va a ejecutar mientras n sea menor a lo establecido por el user
    echo str_repeat("*", $i + 1) .  "\n"; //se va agragando el numero de *
  }
}

arbolito();
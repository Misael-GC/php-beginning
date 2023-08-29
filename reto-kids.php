<?php

function clear()
{
    if (PHP_OS === "WINNT") {
        system('cls', "w"); //windows
    } else {
        system("clear"); //linux y mac
    }
}



function logic(){
  $user = readline("Escribe la edad de tu hijo/hija, recuerda que el límite es de 13 años: ");
  
  if ($user < 5) {
      echo "El estudiante con 4 años tendrá sus juguetes en la parte inferior de la bodega";
  } elseif ($user >= 5 && $user < 7) {
      echo "El estudiante con 6 años tendrá sus juguetes en la parte media de la bodega.";
  } elseif ($user >= 7 && $user <= 10) {
      echo "El estudiante con 10 años tendrá sus juguetes en la parte alta de la bodega.";
  } else {
      echo "No está dentro de mis parámetros. Vuelve a intentarlo, tienes otras 2 oportunidades. De lo contrario, vuelve a formarte.";
  }
  sleep(3);
  clear();
  
}

function pregunta() {
    $res = readline("¿Quieres ingresar la edad de otro niño? (si/no): ");
    return strtolower($res) === "si";
}

do {
    logic();
} while (pregunta());

echo "Saliendo del programa. ¡Hasta luego!";


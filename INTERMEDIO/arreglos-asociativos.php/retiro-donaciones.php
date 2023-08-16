<?php

//pedir un dato

$dato = readline("Ingresa el monto de tus donaciones: ");

//echo "eL DATO ES: " . $dato;

if($dato >= 100){
    echo "Puedes retirar tu monto de: " . $dato . " dolares";
    echo "\n";
}
elseif($dato == 95 ){
    echo "Puedes retirar tu monto de: " . $dato . " dolares";
    echo " este es un monto especial por eso pudiste retirar, pero es a menos, que se = a este monto ;) \n";
}
else{
    echo "No puedes retirar nada, porque no es suficiente, se paciente, ya mero, solo puedes retirar despues de 10 dolares";
    echo "\n";
}

echo "\n";
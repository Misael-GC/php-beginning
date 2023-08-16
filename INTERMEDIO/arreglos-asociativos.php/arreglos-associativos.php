<?php

//example 1
$edades = array(
    "Carlos" => 20,
    "Juan" => 30,
    "Pedro" => 40,
);

echo "La edad de Carlos es " . $edades["Carlos"];

echo "\n";

//EXAMPLE 2
$cafes = array(
    "Capuccino" => 50,
    "Latte" => 40,
    "Americano" => 30,
);

echo "El precio del cafe Americano es de {$cafes ['Americano']}";


//Example 3
$personas = array(
    "Carlos" => array(
        "edad" => 20,
        "apellido" => "Juarez"
    ),

    "Rosario" => array(
        "edad" => 25,
        "apellido" => "Vargas"
    ),
);

echo "La información de Rosario es: Edad: " . $personas["Rosario"]["edad"] . " Apellido: " . $personas["Rosario"]["apellido"];
echo "\n";
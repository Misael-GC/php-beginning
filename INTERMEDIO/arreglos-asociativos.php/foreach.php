<?php

//ciclo que permite recorrer de una forma muy facil cualquier arreglo 

$tiendita_de_cafes = array(
    "de Colombia" => 20,
    "Americano"  => 15.99,
    "Mocca"   => 34.78,
    "Capuccino"     => 6.99
);

foreach ($tiendita_de_cafes as $cafe => $price) {
    echo "$ El café $cafe cuesta $$price USD \n"; // Formatea el precio
}

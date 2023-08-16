<?php
//break y continuo
//break: rompe el ciclo, SIN IMPORTAR SI NO HA TERMINADO DE EJECUTAR TODO
//continue: en lugar de romper solo se salta al siguiente ciclo 
// ejemplo break

$tiendita_de_cafes = array(
    "de Colombia" => 20,
    "Americano"  => 15.99,
    "Mocca"   => 34.78,
    "Capuccino"     => 6.99
);

foreach ($tiendita_de_cafes as $cafe => $price) {

   echo "Actualmente encontré al café $cafe que cuesta $$price USD \n"; // Formatea el precio

   if ($cafe == "Mocca") {
        echo "Encontramos a Mocca!";
        break;
    }
}

echo "\n";

// ejemplo continue

$electrodomesticos = array(
    "focos" => 20,
    "contactos"  => 15.99,
    "camaras"   => 34.78,
    "audifonos de cable" => 2,
    "asistentes de voz"     => 6.99,
    "televisores"      => 120.99,
);

foreach ($electrodomesticos as $electro => $price2) {
    if($price2 <= 10)
    continue;

    echo "$electro tienen un precio mayor a 10 USD, con $price2, \n";
}

echo "\n";

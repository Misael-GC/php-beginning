<?php

$productos = array(
    "Electrodomestico" => 25,
    "cocina" => 24,
    "mantenimiento" => 30,
    "tecnología" => 15
);

function calc($productos){
//    global $productos;
    foreach ($productos as $product => $valor) {
        $discount = ($valor * 0.35);
        $new_price = $valor - $discount;
        $origin = $valor;
        echo "$ Tu descuento tu $product es de $new_price y tu precio original es de $$origin USD \n";
    }
}

calc($productos);
<?php
//Debes hacer un arreglo que contenga mínimo 3 “michis”.
//Cada uno debe tener: nombre, ocupación, color y comidas.
//Las comidas se subdividen en comidas favoritas y comidas que no le gusta.


$michis = array(
    "cat1" => [
        "nombre" => "Michel",
        "ocupacion" => "estudiante",
        "color" => "negro",
        "comida" => [
            "favorita" => [
                "pizza",
                "pozole",
                "tortas"
            ],
            "dont like" => [
                "hamburguesas",
                "verduras",
                "sopa"
            ]
        ]
    ],
    "cat2" => [
        "nombre" => "Mauricio",
        "ocupacion" => "contador",
        "color" => "gris",
        "comida" => [
            "favorita" => [
                "mole",
                "quesadillas",
                "tortas"
            ],
            "dont like" => [
                "pizza",
                "tacos",
                "elote"
            ]
        ]
    ],
    "cat3" => [
        "nombre" => "Roberto",
        "ocupacion" => "programador",
        "color" => "negro",
        "comida" => [
            "favorita" => [
                "pizza",
                "pozole",
                "hamburguesas"
            ],
            "dont like" => [
                "mariscos",
                "pescado",
                "mollejas"
            ]
        ]
    ],
);

echo "\n";
$gato1 = $michis["cat1"];
echo "Las comidas favoritas de Michel son " . implode(", ", $gato1["comida"]["favorita"]);

echo "\n";





//solución profesor

$escuela = array(

    array(
        "Nombre" => "Michijose",
        "Ocupacion" => "Developer increible",
        "Color" => "Naranja con rayitas",
        "Comidas" => array(
            "Favoritas" => "Lasaña, Atun",
            "NoFavoritas" => "Fresas, Cacahuates"
        )
    ),

    array(
        "Nombre" => "Michisancio",
        "Ocupacion" => "jQuery Developer",
        "Color" => "Blanco con manchitas negras",
        "Comidas" => array(
            "Favoritas" => "Pescado, Pollo",
            "NoFavoritas" => "Atun"
        )
    ),

    array(
        "Nombre" => "Mr. Michi",
        "Ocupacion" => "Pro en PHP",
        "Color" => "Blanco",
        "Comidas" => array(
            "Favoritas" => "Pizza",
            "NoFavoritas" => "Pescado"
        )
    ),

);


// $michisancio = $escuela[1];
// echo "Las comidas favoritas de Michisancio son " . $michisancio['Comidas']['Favoritas'];


$mr_michi = $escuela[2];
echo "El color de Mr. Michi es " . $mr_michi["Color"];

echo "\n";
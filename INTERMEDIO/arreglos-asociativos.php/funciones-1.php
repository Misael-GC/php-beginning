<?php

//creamos una funcion y ponemos un switch que va hacer su lógica
function get_pokemon() {
//rand es una función random la cual le pasamos los parameetros
    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu\n";
            break;
        
        case 2:
            echo "Charmander\n";
            break;

        case 3:
            echo "Mewtwo\n";
            break;
        
        default:
            echo "Lo siento, no hay pokémon para ti :c\n";
    }

}

//podemos conbinar aprendizajes
for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}

echo "\n";
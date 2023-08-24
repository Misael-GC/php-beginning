<?php
// creamos una funcion que limpie la pantalla
function clear()
{
    if (PHP_OS === "WINNT") {
        system('cls', "w"); //windows
    } else {
        system("clear"); //linux y mac
    }
}

function check_letters($choosen_word, $player_letter, $discovered_letters){
        //verificamos todas las ocurrencias de esta letra para reemplazarla //lo que hace la linea es buscar y reemplazar si la letra ingresada esta en la palabra
        $offset = 0;
        while (
            ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
        ) { //verifica si la letra ingresada por el jugador esta presente en la palabra seleccionada

            $discovered_letters[$letter_position] = $player_letter; //reemplaza el _ por la letra que el user adivino
            $offset = $letter_position + 1; //ya no busca desde el indice 0 de la palabra sino que a la siguiente letra
        }
}

function print_wrong_letter(){
    clear();
  //CHECAR EL CoDIGO EN CHATGPT
/* The code `["attempts"]++;` is incrementing the value of the global variable `` by
1. This variable keeps track of the number of incorrect attempts made by the player. */
  $GLOBALS["attempts"]++;
  echo "Letra incorrecta ¯\_(ツ)_/¯ " . (MAX_ATTEMPS - $GLOBALS["attempts"]) . " intentos";
  sleep(3); //permite pausar la ejecucion del programa
};


/**
 * The function "print_man" prints a hangman figure based on the number of attempts made.
 */
function print_man() {

    global $attempts;
    
    switch ($attempts) {

        case 0:
            echo "
            +---+
            |   |
                |
                |
                |
                |
            =========
            ";
            break;
           
        case 1:
            echo "
            +---+
            |   |
            O   |
                |
                |
                |
            =========
            ";
            break;

        case 2:
            echo "
            +---+
            |   |
            O   |
            |   |
                |
                |
            =========
            ";
            break;

        case 3:
            echo "
            +---+
            |   |
            O   |
           /|   |
                |
                |
            =========
            ";
            break;

        case 4:
            echo "
            +---+
            |   |
            O   |
           /|\  |
                |
                |
            =========
            ";
            break;

        case 5:
            echo "
            +---+
            |   |
            O   |
           /|\  |
           /    |
                |
            =========
            ";
            break;

        case 6:
            echo "
            Me mataste we
            +---+
            |   |
            O   |
           /|\  |
           / \  |
                |
            =========
            ";
            break;

    }

    echo "\n\n";

}


function print_game(){
    global $word_length, $discovered_letters;

    print_man();

    echo "Palabra de $word_length letras \n\n"; // muestra el nmero de letras
    echo $discovered_letters; // muestra las lineas  _ _ _ _ _
    echo "\n\n";
}


function end_game(){
    global $attempts, $choosen_word, $discovered_letters;

    clear();

    if($attempts < MAX_ATTEMPS ) //Si el numero de intentos es menor al maximo, o te sobraron intentos
        echo "¡Felicidades! You Win 📱🧑‍💻🎉🎉🎉🎉 \n\n";
    else{
        echo "Suerte para la proxima ¯\_(ツ)_/¯";
        print_man();
    }

    echo " La palabra es: $choosen_word \n";
    echo " Tú descubriste $discovered_letters \n";

}


//creamos un arreglo con diferentes palabras
$possible_word = [
    "manzana",
    "banana",
    "pera",
    "uva",
    "kiwi",
    "naranja",
    "fresa",
    "piña",
    "mango",
    "limon",
    "cereza",
    "melon",
    "ciruela",
    "durazno",
    "granada",
    "frambuesa",
    "mora",
    "papaya",
    "guayaba",
    "melocoton",
    "maracuya",
    "higo",
    "coco",
    "anana",
    "zarzamora",
    "membrillo",
    "caqui",
    "caña",
    "mandarina",
    "calabaza",
    "zapote",
    "cantalupo",
    "toronja",
    "guanabana",
    "agave",
    "cambur",
    "tamarindo",
    "acelga",
    "alcachofa",
    "albahaca",
    "apio",
    "arandano",
    "batata",
    "berenjena",
    "brocoli",
    "cebolla",
    "champiñon",
    "coliflor",
    "espinaca",
    "jitomate",
    "lechuga",
    "pepino",
    "pimiento",
    "rabano",
    "zanahoria",
    "azucar",
    "canela",
    "chocolate",
    "vainilla",
    "harina",
    "aceite",
    "mantequilla",
    "nuez",
    "almendra",
    "coco",
    "avena",
    "arroz",
    "trigo",
    "maiz",
    "pasta",
    "pollo",
    "res",
    "cerdo",
    "pescado",
    "huevo",
    "queso",
    "yogur",
    "leche",
    "agua",
    "cafe",
    "te",
    "vino",
    "cerveza",
    "naranjada",
    "limonada",
    "jugo",
    "galleta",
    "pastel",
    "pan",
    "torta",
    "helado",
    "palomitas",
    "chicle",
    "caramelo",
    "malvavisco",
    "pizza",
    "hamburguesa",
    "tacos",
    "sushi",
    "ensalada",
    "sopa",
    "chocolate",
    "cereal",
    "zumo",
    "cuidado",
    "genio",
    "soledad",
    "pomelo",
    "futbol",
    "historia",
    "leyenda",
    "extranjero",
    "cambio",
    "nuevo",
    "tecnologia",
    "avance",
    "felicidad",
    "calma",
    "vida",
    "superarcion",
    "Tecnologia",
    "Innovacion",
    "Startups",
    "Emprendimiento",
    "Venture Capital",
    "Inversionistas",
    "Programacion",
    "Silicon Valley",
    "Valle del Silicio",
    "Empresas Tecnologicas",
    "Ingenieros",
    "Empresarios",
    "Incubadoras",
    "Aceleradoras",
    "Inversion",
    "IPO",
    "Innovadores",
    "Ecosistema",
    "Disrupcion",
    "Investigacion y Desarrollo",
    "Capital de Riesgo",
    "Inversionistas angeles",
    "Innovacion Abierta",
    "Colaboracion",
    "Financiamiento",
    "Desarrollo agil",
    "Hackathon",
    "Innovacion Disruptiva",
    "Networking",
    "Cultura Empresarial",
    "Tecnologia Emergente",
    "Nuevas Tendencias",
    "Conferencias Tech",
    "Mentoria",
    "Inversionistas de Semilla",
    "Ciberseguridad",
    "Big Data",
    "Inteligencia Artificial",
    "Blockchain",
    "Realidad Virtual",
    "Internet de las Cosas",
    "Machine Learning",
    "Robotica",
    "Automatizacion",
    "Biotecnologia",
    "Energias Renovables",
    "Espacio",
    "Educacion Tecnologica",
    "Comunidad",
    "Colaboracion",
    "Innovacion Social",
    "Diseño de Experiencia de Usuario",
    "Prototipo",
    "Futuro Tecnologico",
    "Conexion",
    "Trabajo en Equipo",
    "Desafios Tecnologicos",
    "Pitch",
    "Eventos Tecnologicos",
    "Empresas Unicornio",
    "exito Empresarial",
    "Frversor angel",
    "Habilidades Empresariales",
    "Mentores Exitosos",
    "Ecosistema Empresarial",
    "Estrategias de Marketing",
    "Escalabilidad",
    "Fracaso",
    "Lecciones Aprendidas",
    "Silicon Valley Spirit",
    "Ecosistema de Innovacion",
    "Centro Tecnologico",
    "Creatividad",
    "Innovacion Abierta",
    "Globalizacion Tecnologica",
    "Economia Digital",
    "Redes de Contactos",
    "Emprendedores Exitosos",
    "Startup Culture",
    "Equidad",
    "Transformacion Digital",
    "Investigacion",
    "Creatividad",
    "Desarrollo Sostenible",
    "Futuro de la Tecnologia",
    "Coworking",
    "Espiritu Emprendedor",
    "Cultura de Innovacion",
    "Colaboracion Interdisciplinaria",
    "Tecnologia Limpia",
    "Educacion en Tecnologia",
    "Politica Tecnologica",
    "Competitividad",
    "Innovacion Continua",
    "Economia del Conocimiento",
    "Empresas Tech",
    "Tecnologias Disruptivas",
    "Innovacion en Negocios",
    "Innovacion Digital",
    "Investigacion Cientifica",
    "Espiritu Innovador",
    "Desarrollo de Producto",
    "Estrategia Empresarial",
    "Innovacion Tecnologica",
    "Mercado Global",
    "Innovacion en Servicios",
    "Transformacion Empresarial",
];

//define los intentos que puede tener el jugador
define("MAX_ATTEMPS", 7);


//empecemos el juego
echo "🧑‍💻 ¡Juego de ahorcado! \n\n";

/* Incializaomo el juego

 1 - que elija una palabra random
 2 -  que todos los caracteres que ingrese el usuario se conviertan en minusculas
 3 -  saber cual es la longitud de la palabra escojida
 4 -  que la palabra se vea con lineas  _ _ _ _ _ _ _
 5 - Decirle al usuario los intentos*/

//$choosen_word = $possible_word[ rand(0, 205) ]; cuenta a mano las palabras, pero la siguiente linea lo calcula
/* This line of code selects a random word from the array ``. It uses the `rand()`
function to generate a random index between 0 and the length of the array minus 1
(`count() - 1`). The selected word is then assigned to the variable ``. */
$choosen_word = $possible_word[rand(0, count($possible_word) - 1)]; // dice el tamaño de la palabra
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_ ");
$attempts = 0;

//imprimimos las letras encontradas y las no encontradas
do { //do va a repetir el programa

    //damos la bienvenida al jugador
    print_game();

    //pedimos al user que escriba una letra y la volvemos en minusculas
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    //Validar si la letra que el usuario ingresa si existe en la palabra seleccionada--------
//str_contains() dice si una letra existe en un string que eligio


    if (str_contains($choosen_word, $player_letter)) {
       $discovered_letters = check_letters($choosen_word, $player_letter, $discovered_letters);
    } else {
        clear();
        //SEGUNDA PARTE -------------------------------
    }
    clear();

} while ($attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word ); //se va a repetir mientras el no. de intentos < maximos intentos Y  mientras el usuario no termine de adivinar la frase completa seguira repitiendose, mientras no sean iguales se repite


end_game();

echo "\n";



// https://github.com/marcossarlo/juego-ahorcado-php/blob/main/index.php
// https://github.com/RetaxMaster/juego-ahorcado-php/blob/main/index.php

/*Explicacion de la variable global attemps
$GLOBALS["attempts"]++;: Esta linea incrementa el valor de la variable global $attempts en uno cada vez que se llama a la 
funcion print_wrong_letter(). $GLOBALS es un arreglo asociativo en PHP que contiene todas las variables globales del script en curso, 
y puedes acceder a las variables globales utilizando su nombre como indice. En este caso, $GLOBALS["attempts"] 
se refiere a la misma variable que $attempts en el ambito global. 

La relacion entre estas dos lineas de codigo es que ambas manipulan la misma variable global $attempts para llevar un registro del 
nmero de intentos fallidos del jugador en todo el programa.

*/

/*

Ideas a mejorar (retos):

- Que al terminar el juego ganado diga cuantos intentos le quedó.
- Que al terminar pregunte si quiere jugar de nuevo y reinicie el juego.
- 

*/
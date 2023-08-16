<?php
// creamos una función que limpie la pantalla
function clear()
{
    if (PHP_OS === "WINNT") {
        system('cls', "w"); //windows
    } else {
        system("clear"); //linux y mac
    }
}

//creamos un arreglo con diferentes palabras
$possible_word = [
    "manzana",
    "banana",
    "pera",
    "uva",
    "sandía",
    "kiwi",
    "naranja",
    "fresa",
    "piña",
    "mango",
    "limón",
    "cereza",
    "melón",
    "ciruela",
    "durazno",
    "granada",
    "frambuesa",
    "mora",
    "papaya",
    "guayaba",
    "melocoton",
    "maracuyá",
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
    "guanábana",
    "agave",
    "cambur",
    "tamarindo",
    "acelga",
    "alcachofa",
    "albahaca",
    "apio",
    "arándano",
    "batata",
    "berenjena",
    "brócoli",
    "calabacín",
    "cebolla",
    "champiñón",
    "coliflor",
    "espinaca",
    "jitomate",
    "lechuga",
    "pepino",
    "pimiento",
    "rábano",
    "zanahoria",
    "açaí",
    "azúcar",
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
    "maíz",
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
    "café",
    "té",
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
    "tecnología",
    "avance",
    "felicidad",
    "calma",
    "vida",
    "superarción",
    "Tecnología",
    "Innovación",
    "Startups",
    "Emprendimiento",
    "Venture Capital",
    "Inversionistas",
    "Programación",
    "Silicon Valley",
    "Valle del Silicio",
    "Empresas Tecnológicas",
    "Ingenieros",
    "Empresarios",
    "Incubadoras",
    "Aceleradoras",
    "Inversión",
    "IPO",
    "Innovadores",
    "Ecosistema",
    "Disrupción",
    "Investigación y Desarrollo",
    "Capital de Riesgo",
    "Inversionistas Ángeles",
    "Innovación Abierta",
    "Colaboración",
    "Financiamiento",
    "Desarrollo Ágil",
    "Hackathon",
    "Innovación Disruptiva",
    "Networking",
    "Cultura Empresarial",
    "Tecnología Emergente",
    "Nuevas Tendencias",
    "Conferencias Tech",
    "Mentoría",
    "Inversionistas de Semilla",
    "Ciberseguridad",
    "Big Data",
    "Inteligencia Artificial",
    "Blockchain",
    "Realidad Virtual",
    "Internet de las Cosas",
    "Machine Learning",
    "Robótica",
    "Automatización",
    "Biotecnología",
    "Energías Renovables",
    "Espacio",
    "Educación Tecnológica",
    "Comunidad",
    "Colaboración",
    "Innovación Social",
    "Diseño de Experiencia de Usuario",
    "Prototipo",
    "Futuro Tecnológico",
    "Conexión",
    "Trabajo en Equipo",
    "Desafíos Tecnológicos",
    "Pitch",
    "Eventos Tecnológicos",
    "Empresas Unicórnio",
    "Éxito Empresarial",
    "Frversor Ángel",
    "Habilidades Empresariales",
    "Mentores Exitosos",
    "Ecosistema Empresarial",
    "Estrategias de Marketing",
    "Escalabilidad",
    "Fracaso",
    "Lecciones Aprendidas",
    "Silicon Valley Spirit",
    "Ecosistema de Innovación",
    "Centro Tecnológico",
    "Creatividad",
    "Innovación Abierta",
    "Globalización Tecnológica",
    "Economía Digital",
    "Redes de Contactos",
    "Emprendedores Exitosos",
    "Startup Culture",
    "Equidad",
    "Transformación Digital",
    "Investigación",
    "Creatividad",
    "Desarrollo Sostenible",
    "Futuro de la Tecnología",
    "Coworking",
    "Espíritu Emprendedor",
    "Cultura de Innovación",
    "Colaboración Interdisciplinaria",
    "Tecnología Limpia",
    "Educación en Tecnología",
    "Política Tecnológica",
    "Competitividad",
    "Innovación Continua",
    "Economía del Conocimiento",
    "Empresas Tech",
    "Tecnologías Disruptivas",
    "Innovación en Negocios",
    "Innovación Digital",
    "Investigación Científica",
    "Espíritu Innovador",
    "Desarrollo de Producto",
    "Estrategia Empresarial",
    "Innovación Tecnológica",
    "Mercado Global",
    "Innovación en Servicios",
    "Transformación Empresarial",
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

//$choosen_word = $possible_word[ rand(0, 205) ]; cuenta a mano las palabras, pero la siguiente línea lo calcula
$choosen_word = $possible_word[rand(0, count($possible_word) - 1)];
$choosen_word = strtolower($choosen_word);
$word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $word_length, "_ ");
$attempts = 0;

//imprimimos las letras encontradas y las no encontradas
do { //do va a repetir el programa

    echo "Palabra de $word_length letras \n\n"; // muestra el número de letras
    echo $discovered_letters; // muestra las lineas  _ _ _ _ _

    //pedimos al user que escriba una letra y la volvemos en minusculas
    $player_letter = readline("Escribe una letra: ");
    $player_letter = strtolower($player_letter);

    //Validar si la letra que el usuario ingresa si existe en la palabra seleccionada--------
//str_contains() dice si una letra existe en un string que eligio

    if (str_contains($choosen_word, $player_letter)) {
        //verificamos todas las ocurrencias de esta letra para reemplazarla //lo que hace la linea es buscar y reemplazar si la letra ingresada está en la palabra
        $offset = 0;
        while (
            ($letter_position = strpos($choosen_word, $player_letter, $offset)) !== false
        ) { //verifica si la letra ingresada por el jugador está presente en la palabra seleccionada

            $discovered_letters[$letter_position] = $player_letter; //reemplaza el _ por la letra que el user adivino
            $offset = $letter_position + 1; //ya no busca desde el indice 0 de la palabra sino que a la siguiente letra
        }
    } else {
        clear();
        $attempts++;
        echo "Letra incorrecta ¯\_(ツ)_/¯ " . (MAX_ATTEMPS - $attempts) . " intentos";
        sleep(3); //permite pausar la ejecución del programa
    }
    clear();

} while ($attempts < MAX_ATTEMPS && $discovered_letters != $choosen_word ); //se va a repetir mientras el no. de intentos < maximos intentos Y  mientras el usuario no termine de adivinar la frase completa seguira repitiendose, mientras no sean iguales se repite
clear();

if($attempts < MAX_ATTEMPS ) //Si el numero de intentos es menor al maximo, o te sobraron intentos
    echo "¡Felicidades! You Win 📱🧑‍💻🎉🎉🎉🎉 \n\n";
    else
        echo "Suerte para la proxima ¯\_(ツ)_/¯";

echo " La palabra es: $choosen_word \n";
echo " Tú descubriste $discovered_letters \n";

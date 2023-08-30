<?php

$palabras = array("sol", "luna","cielo");
$palabrasDesordenadas = array(); //las desordenaremos con for

for ($i=0; $i < 3 ; $i++) { 
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]); //srt_shuffle desordena
}

print_r($palabrasDesordenadas); //para mostrar array
echo "
<form action='analisis.php'>
    <input type='text' name='palabra0' />
    <input type='text' name='palabra1' />
    <input type='text' name='palabra2' />
    <button type='submit'> Enviar </button>
</form>
";
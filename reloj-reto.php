<?php

$segundos = readline("Ingrese el tiempo en segundos: ");

$horas = (int) ($segundos / 3600 );
$segundos = (int) ($segundos % 3600);
$minutos = (int) ($segundos / 60 );
$segundos = (int) ($segundos % 60);

echo "Son $horas horas, $minutos minutos y $segundos segundos";

echo "\n";

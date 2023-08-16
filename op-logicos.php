<?php
# Ejemplo en PHP
# ----------------
# Declaración de variables:
$gatos_felinos =true;
$gatos_tienen_4_patas =true;
$gatos_programan_en_php = false;

var_dump( $gatos_felinos AND $gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.

# ----------------
$result = $gatos_tienen_4_patas && $gatos_programan_en_php;

var_dump( !$gatos_tienen_4_patas ); # Se imprimirá en consola/navegador el tipo de dato y valor de la evaluación.

echo "\n"; # Salto de línea.
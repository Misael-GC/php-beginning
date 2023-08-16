<?php

// Tienda | caminos
//  2     | 1
//  3     | 2
//  4     | 3
//  5     | 5
//  6     | 8
//  8     | 13
//  9     | 21


$numero_de_tienda = (int)readline("Dime el número de tienda: "); //iniciamos poniendo el dato de la tienda la cual queremos llegar
$anterior = 0; //ponemos el dato anterior, por ejemplo apara el camino 1 el anterior es cero || almacenará el valor anterior en la secuencia 
$actual = 1; //el camino actual, iniciamos desde la tienda 2 y hubo una forma de llegar ||

for ($i=2; $i <= $numero_de_tienda ; $i++) { //Comienza un bucle for que se ejecutará desde 2 hasta $numero_de_tienda // ya que a partir de la 2 iniciamos en 1 camino
    # code...
    $temporal = $actual; //se hace para almacenar temporalmente el valor actual antes de ser actualizado en el siguiente paso.
    $actual += $anterior; //La variable $actual se actualiza sumando $anterior. Esto es parte de la lógica de la secuencia de Fibonacci, donde cada número en la secuencia es la suma de los dos números anteriores
    $anterior = $temporal; //La variable $anterior se actualiza con el valor almacenado en $temporal, que era el valor anterior antes de la actualización en el paso anterior.
}
 
echo "Hay $actual formas distintas de llegar";

echo "\n";

/* Mejor explicacón del código dentro del for

Para la tienda 2 
$temporal = $actual (su valor es de 1)
$actual + $anterior = $actual (1+0= 1)
$anterior = $temporal (su valor es de 1)

Para la tienda 3 
$temporal = $actual (su valor es de 1)
$actual + $anterior = $actual (1+1= 2)
$anterior = $temporal (su valor es de 1)

Para la tienda 4 
$temporal = $actual (su valor es de 2)
$actual + $anterior = $actual (2+1= 3)
$anterior = $temporal (su valor es de 2)

Para la tienda 5 
$temporal = $actual (su valor es de 3)
$actual + $anterior = $actual (3+2= 5)
$anterior = $temporal (su valor es de 3)
 */
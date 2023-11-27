<?php
//php permite cualquier tipo de valores

// Array Escalares: PHP define los índices propios
echo ('Array Escalar' . '<br>');
echo '<br>';
$personas = array("Maximiliano", "Lucia", "Juan", "Analia");

echo $personas[2];
echo '<br>';

var_dump($personas);
echo '<br>';

echo ('<pre>');
print_r($personas);
echo ('</pre>');

$personas[1] = "Maria";

echo ('<pre>');
print_r($personas);
echo ('</pre>');

//otra manera de definirlo

$personas = ["Maximiliano", 12.58, false, "Analia"];
echo ('<pre>');
print_r($personas);
echo ('</pre>');

var_dump($personas);
echo '<br>';

// Array Asociativos
echo ('Array Asociativo' . '<br>');
$libros = [
    'nombre'    => 'libro 1',
    'editorial' =>  'editorial 1',
    'anio'      =>  2023
];

echo ('<pre>');
print_r($libros);
echo ('</pre>');


$personas = [
    'nombre'    =>  "Lourdes",
    'apellido'  =>  "Duarte",
    'cursos'    =>  ['PHP', 'LARAVEL', 'VUEJS']
];

echo ('<pre>');
print_r($personas);
echo ('</pre>');

//FUNCIONES PARA LOS ARRAYS
$personas = array("Maximiliano", "Lucia", "Juan", "Analia");

echo ('<pre>');
print_r($personas);
echo ('</pre>');

$cantidad = count($personas);
echo 'Cantidad de elementos: '. $cantidad . '<br>';
echo 'Cantidad de elementos: '. count($personas) . '<br>';

//Ordenamiento de Arrays: https://www.php.net/manual/es/array.sorting.php

sort($personas); //ordena por abecedario
echo ('<pre>');
print_r($personas);
echo ('</pre>');

rsort($personas); //ordena por valor, no mantiene índice, de mayor a menor
echo ('<pre>');
print_r($personas);
echo ('</pre>');
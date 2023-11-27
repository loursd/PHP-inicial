<?php

$nombre = "Lourdes";
$apellido = "Duarte";
$edad = 29;
$nombreYApellido = $nombre.' '.$apellido.' '.$edad;

/*echo 'Mi nombre es: '. $nombre. '. Mi apellido es: ' . $apellido.'<br>';

echo 'Mi nombre y apellido es: ' .$nombreYApellido; */

echo "Mi nombre es: $nombre"; //las " interpretan las variables de php
echo '<br>';

echo "Mi nombre es: {$nombre}"; 
echo '<br>';

echo 'Mi nombre es: {$nombre}';

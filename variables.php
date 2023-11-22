<?php

/*  VARIABLES SIEMPRE LLEVAN $
van a estar definidas en letras con o sin números
pero no pueden ser solamente números */

$numero = 100;

echo 'Mi sueldo es: ' . $numero. '<br>';

/* Utilizar nombres representativos, pensar que otro va a usar nuestro código 
 y el mismo debe ser interpretado de manera sencilla */

$salario = 100;
$Salario = 200;

echo 'Mi sueldo es: ' .$salario.'  '.$Salario. '<br>'; //PHP es sensible a las mayúsculas


$IdentificacionDeUsuario = 1; //UpperCamelCase  <---- preferida para constantes
echo $IdentificacionDeUsuario. '<br>';

$identificacionDeUsuario = 2; //LowerCamelCase   <--- preferida para variables
echo $identificacionDeUsuario. '<br>';

$usuario_identificacion = 3;    //SnakeCase <---- para base de datos
echo $usuario_identificacion. '<br>';


$salario=20000;  //desde ahora en adelante salario vale 20000
echo 'Mi sueldo es: ' .$salario. '<br>';
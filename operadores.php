<?php

    // + - / *
    //jerarquia
    /*
        1 () se ejecuta primero
        2 "" despues de ()
        3 *,/
        4 +,-
        5 %
    */

   // $resultado = 2 - 3 + 5;
    /*  2-3= -1 +5 =4
        -3+5 = 2+2 =4 */

    //echo "Resultado: $resultado";

   /* $numero1 = 2;
    $numero2 = 5;

    $resultado =( $numero1 + $numero2) / 10;

    echo "Resultado: $resultado"; */

    /* $numero1 = 10;
    $numero2 = 5;

    echo 'Resto de la división: '.$numero1 % $numero2;*/

    //  Operadores de Asignación

    $numero = 10;

    echo $numero;

    echo '<br>';

    $numero += 20; // numero = numero + 20;
    echo $numero;
    echo '<br>';

    $numero -= 10; // numero = numero - 10;
    

    echo $numero;
    echo '<br>';

    $numero *= 10; // numero = numero * 10;
   

    echo $numero;
    echo '<br>';

    $numero /= 2; // numero = numero / 2;
    echo $numero;
    echo '<br>';

    $numero .= '1'; // $numero = $numero.'Texto' CONCATENA STRINGS
    echo $numero;   //1001
    echo '<br>';

    $numero +=5;  //PHP detecta el 1 cargado como string entonces lo suma
    echo $numero;   // 1006
    echo '<br>';

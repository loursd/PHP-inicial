<?php

    $numero1 = 10;
    $numero2 = 50;
    $numero3 = '';

    //echo $numero1 == $numero2;  //comparacion devuelve 1 (true) o 0 (false)

    /*var_dump($numero1 == $numero2); //compara valores sin tener en cuenta el tipo de dato
    echo'<br>';
    
    var_dump($numero1 === $numero2);    //compara teniendo en cuenta el tipo de dato
    echo'<br>';
    
    var_dump($numero1 < $numero2);
    echo'<br>';

    var_dump($numero1 <= $numero2);
    echo'<br>';

    var_dump($numero1 > $numero2);
    echo'<br>';

    var_dump($numero1 >= $numero2);
    echo'<br>'; */

    var_dump(($numero1 > $numero2) && ($numero1 < 100)); //AND 
    echo'<br>'; //Verdadero si ambos son verdaderos

    var_dump(($numero1 > $numero2) || ($numero1 < 100)); //OR 
    echo'<br>'; //Falso cuando ambos son falsos

    var_dump(!(($numero1 > $numero2) || ($numero1 < 100))); // ! Negación
    echo'<br>'; //Falso cuando ambos son falsos

    var_dump($numero3!='');
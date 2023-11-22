<?php
    //NO LLEVAN EL $ 
   /* const NOMBREDEUSUARIO = 'Lourdes';  //hasta la version 5.3 de php
        //se suele usar el UpperCase todas en mayúsculas por convención
        // NOMBRDEEUSUARIO = 'Maria';  NO PUEDEN MODIFICARSE
    echo NOMBREDEUSUARIO; */

    define('NOMBREDEUSUARIO', 'Lourdes'); 
    echo NOMBREDEUSUARIO. '<br>';

    define('ROLES',array(       //arreglos: permiten poder llevar grandes contenidos de datos sin llevar varias variables
        'Administrador', //posicion 0
        'Usuario',       //posicion 1
        'Cliente'        //posicion 2
    ));

    echo ROLES[0]. '<br>';

    var_dump(ROLES);
    //arreglos unidimensionales o vectores
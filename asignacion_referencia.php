<?php

$pais = 'Argentina';

$pais2 = $pais; //asignacion común

$pais3 = &$pais; // asignacion por referencia

echo '<br>  pais ---------->>>>'.$pais;
echo '<br>  pais2---------->>>>'.$pais2;
echo '<br>  pais3---------->>>>'.$pais3;
echo '<br><br><br><br><br><br>';

$pais = 'Brasil'; //cambio en la variable original afecta solo a la referencia, no a la asignacion común
$pais2 = $pais;

echo '<br>  pais ---------->>>>'.$pais;
echo '<br>  pais2---------->>>>'.$pais2;
echo '<br>  pais3---------->>>>'.$pais3;
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <h1>Esto es un archivo PHP</h1>
    <h2> 
        Hola
        <?php
        $test = 'Estamos bien';  /* concatena todo en una linea */
        echo ($test);
        ?>
        Como estas
    </h2>

    <?php
    echo ('<h2> Hola </h2>'); /* muestra en 2 lineas*/
    echo ('<h3>Como estas </h3>');

    echo ('<h2> Hola </h2><h3>Como estas </h3>'); /* muestra en 2 lineas*/

    echo ('<h2> Hola ' . ' Como estas </h2>'); /*concatena en una linea */

    $test = 'Estamos bien'; /*crea la variable test*/
    echo ('<h2> Hola ' . $test . ' Como estas </h2>'); /*concatena strings y la variable test */
    ?>
</body>

</html>
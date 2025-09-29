<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo bucle</title>
</head>
<body>

    <?php
    echo "<h1>BUCLES</h1>";
    echo "<hr>";
    echo "<h2>Bucle For</h2>";
    for ($i = 0; $i <= 10; $i++) {
        echo "El valor de i es " . $i . "<br>";
    }
    echo "<br>";
    echo "<hr>";
    echo "<h2>Bucle While</h2>";
    $j = 0;
    while($j < 10){
        echo "El valor de j es " . $j . "<br>";
        $j++;
    }
    echo "<br>";
    echo "<hr>";
    echo "<h2>Bucle Do While</h2>";
    $a = 0;
    do {
        echo "El valor de i es <mark>$a</mark> <br>";
        $a++;
    }while($a < 10);
    ?>

</body>
</html>

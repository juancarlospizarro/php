<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
    echo "<h1>Bucle descendente de 320 a 160 usando un bucle Do-While</h1>";
    echo "<hr>";
    $i = 320;
    do{
        echo "El valor de i es $i <br>";
        $i -= 20;
    }while($i >= 160);
    ?>
</body>
</html>
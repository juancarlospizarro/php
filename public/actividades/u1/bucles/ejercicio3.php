<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    echo "<h1>Multiplos de 5 (0-100) con bucle Do-While</h1>";
    $i = 0;
    do{
        if($i % 5 == 0 && $i != 0){
                echo "<mark>$i es múltiplo de 5</mark><br>";
            }else{
                echo "$i no es múltiplo de 5<br>";
            }
        $i++;
    }while($i <= 100);
    ?>
</body>
</html>
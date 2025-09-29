<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        for($i = 0; $i <= 100; $i++){
            if($i % 5 == 0 && $i != 0){
                echo "<mark>$i es múltiplo de 5</mark><br>";
            }else{
                echo "$i no es múltiplo de 5<br>";
            }
        }
    ?>
</body>
</html>
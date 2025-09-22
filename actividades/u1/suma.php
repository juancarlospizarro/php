<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma</title>
</head>
<body>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $suma = $num1 + $num2;
    echo "La suma del número $num1 y el número $num2 es de $suma"

    ?>
</body>
</html>
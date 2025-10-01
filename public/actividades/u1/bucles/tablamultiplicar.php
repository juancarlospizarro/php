<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <form action="">
        <label for="">Introduzca un numero: </label>
        <input type="number" name="numero" id="numero" min=0>
        <input type="submit" value="Enviar">
    </form>
    <?php

    if (isset($_GET['numero'])) {
        $num1 = intval($_GET['numero']);
        echo "<h2>Tabla del " . $num1 . "</h2>";
        echo "<table border=1>";
        for($i = 0; $i <= 10; $i++){
            echo "<tr><td> " . $num1 . " x " . $i . " = " . ($num1*$i) . " </td></tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
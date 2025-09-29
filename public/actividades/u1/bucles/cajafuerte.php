<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja Fuerte</title>
</head>
<body>
    <h1>Adivine la combinación de la Caja Fuerte</h1>
    <p>Recuerde que solo tendrá 4 intentos para conseguirlo</p>
    <form action="cajafuerte.php" method="get">
        <label for="numero1">Número 1:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">Número 2:</label>
        <input type="number" name="numero2" id="numero2">
        <br>
        <label for="numero3">Número 3:</label>
        <input type="number" name="numero3" id="numero3">
        <br>
        <label for="numero4">Número 4:</label>
        <input type="number" name="numero4" id="numero4">
        <br>
        <button type="submit">Probar suerte</button>
    </form>

    <?php
$num1c = 0;
$num2c = 9;
$num3c = 1;
$num4c = 3;

$intentos = 0;

while($intentos <= 4){
    if (isset($_GET['numero1'], $_GET['numero2'], $_GET['numero3'], $_GET['numero4'])) {
    $num1 = intval($_GET['numero1']);
    $num2 = intval($_GET['numero2']);
    $num3 = intval($_GET['numero3']);
    $num4 = intval($_GET['numero4']);

    $intentos++;

    if ($num1 == $num1c && $num2 == $num2c && $num3 == $num3c && $num4 == $num4c) {
        echo "<p>¡La caja fuerte se ha abierto satisfactoriamente!</p>";
    } else {
        if ($intentos >= 4) {
            echo "<p>Lo siento, has agotado tus 4 intentos.</p>";
        } else {
            $restantes = 4 - $intentos;
            echo "<p>Lo siento, esa no es la combinación. Intentos restantes: $restantes</p>";
        }
    }
}
}

?>

</body>
</html>
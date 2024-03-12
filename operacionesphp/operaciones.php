<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" required>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if(is_numeric($num1) && is_numeric($num2)) {
            echo "<h3>Resultados:</h3>";
            echo "Suma: " . ($num1 + $num2) . "<br>";
            echo "Resta: " . ($num1 - $num2) . "<br>";
            echo "Producto: " . ($num1 * $num2) . "<br>";
            if($num2 != 0) {
                echo "Cociente: " . ($num1 / $num2) . "<br>";
                echo "Residuo: " . ($num1 % $num2) . "<br>";
            } else {
                echo "No se puede dividir por cero.<br>";
            }
            echo "Potencia: " . ($num1 ** $num2) . "<br>";
        } else {
            echo "Por favor ingrese números válidos.";
        }
    }
    ?>
</body>
</html>

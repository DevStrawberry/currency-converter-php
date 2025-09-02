<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuel Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    }
?>
<form action="index.php" method="post" onsubmit="return validarValor()">
    <p>
        Value (R$): <input type="number" name="real" step="0.01" required>
    </p>
    <p>
        <input type="submit" name="dolar" value="Dolar">
        <input type="submit" name="euro" value="Euro">
        <input type="submit" name="libra" value="Libra">
    </p>
</form>
</body>
</html>
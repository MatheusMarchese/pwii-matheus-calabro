<form method="get" action="exercicio3.php">

    <label for="bmenor">base menor: </label>
    <input type="number" name="bmenor" required>
    <br><br>

    <label for="bmaior">base maior: </label>
    <input type="number" name="bmaior" required>
    <br><br>

    <label for="alt">altura: </label>
    <input type="number" name="alt" required>
    <br><br>

    <input type="submit" value="VER">

</form>

<?php
if (!isset($_GET['bmenor']) || !isset($_GET['bmaior']) || !isset($_GET['alt'])) {
    return;
}

$menor = $_GET['bmenor'];
$maior = $_GET['bmaior'];
$h = $_GET['alt'];

$calcArea = (($menor + $maior) * $h) / 2;

echo "A área é: {$calcArea}";
?>
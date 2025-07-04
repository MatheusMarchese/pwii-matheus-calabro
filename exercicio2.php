<form method="get" action="exercicio2.php">

    <label for="comp">comprimento: </label>
    <input type="number" name="comp" required><br><br>

    <label for="larg">largura: </label>
    <input type="number" name="larg" required><br><br>

    <label for="alt">altura: </label>
    <input type="number" name="alt"><br><br>

    <input type="submit" value="mandar">

</form>

<?php
if (!isset($_GET['comp']) || !isset($_GET['larg']) || !isset($_GET['alt'])) {
    return;
}

$comp = $_GET['comp'];
$larg = $_GET['larg'];
$alt = $_GET['alt'];

$vol = (float) $comp * $larg * $alt;

echo "volume: {$vol}";
?>
<form method="get" action="exercicio1.php">
    <label for="distancia">km :</label>
    <input type="number" name="distancia" required><br><br>

    <label for="combustivel">litros: </label>
    <input type="number" name="combustivel" required><br><br>

    <input type="submit" value="mandar">
</form>

<?php
if (!isset($_GET['distancia']) || !isset($_GET['combustivel'])) {
    return;
}

$dist = $_GET['distancia'];
$litro = $_GET['combustivel'];

$consumoMedio = (float) $dist / $litro;

echo "Média: {$consumoMedio}";
?>
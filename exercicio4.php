<form method="get" action="exercicio4.php">

    <label for="preco">valor: </label>
    <input type="number" name="preco" required>
    <br><br>

    <input type="submit" value="VER">

</form>

<?php
if (!isset($_GET['preco'])) {
    return;
}

$precoBase = (float) $_GET['preco'];
$valorFinal = (($precoBase * 16) / 100) + $precoBase;

echo "Valor total: {$valorFinal}<br>Parcelas de 10: " . ($valorFinal / 10);
?>

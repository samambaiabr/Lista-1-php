<?php
$Valor = 100.00;
$ValordoLitro = 5.00;
$Litros = $Valor / $ValordoLitro;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 23</title>
</head>
<body>
    <h3>ATIVIDADE 23</h3>
    <p>Um motorista deseja colocar uma determinada quantidade de reais de gasolina
no tanque. Escreva um algoritmo para ler o preço do litro da gasolina e o valor do
pagamento, exibindo quantos litros ele conseguiu colocar no tanque.
</p>

<p>
    <?php echo("Valor Pago:") . $Valor ?>
    <p></p>
    <?php echo("Valor do Litro:") . $ValordoLitro ?>
    <p></p>
    <?php echo("Quantidade de Litros:") . $Litros ?>
</p>
</body>
</html>
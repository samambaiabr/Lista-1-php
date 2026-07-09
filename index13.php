<?php
$Camisa = 50.00;
$Calça = 120.00;
$Tenis = 230.00;
$Total = $Camisa + $Calça + $Tenis;
$Parcelas = $Total / 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 13</title>
</head>

<body>
    <h3>ATIVIDADE 13</h3>
    <p>Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
        que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
        mostre o valor de cada prestação.</p>
<p>
    <?php echo("PARCELAS:" . $Parcelas) ?>
</p>
</body>

</html>
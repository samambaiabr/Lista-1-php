<?php
$Produto = 200;
$totalDesconto = $Produto * 0.095;
$total = $Produto - $totalDesconto
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
</head>

<body>
    <h3>ATIVIDADE 14</h3>
    <P>Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
        que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
        mostre o valor de cada prestação.
    </P>
    <p>
        <?php echo("Total:" . $total)?>
    </p>
</body>

</html>
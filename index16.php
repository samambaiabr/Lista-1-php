<?php
$valor = 100.00;
$aumento = 0.30;
$subTotal = $valor*$aumento;
$Total = $subTotal+$valor;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 16</title>
</head>
<body>
    <h3>ATIVIDADE 16</h3>
    <p>Faça um algoritmo que receba o preço de custo de um produto e mostre o valor
de venda. O usuário deve informar em quanto por cento deseja aumentar o valor
do produto.</p>
<p>
    <?php
    echo ("valor:").$Total;
     ?>
    
</p>
</body>
</html>
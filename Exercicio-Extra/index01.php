<?php
$Arroz = 28.00;
$Feijao = 9.50;
$Oleo = 7.80;
$Açucar = 5.50;
$Cafe = 18.20;
$SubTotal = $Arroz + $Feijao + $Oleo + $Açucar + $Cafe;
$Desconto = $SubTotal * 0.08;
$ValorFinal = $SubTotal - $Desconto;
$Parcelas = $ValorFinal / 4;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO 01</title>
</head>
<body>
    <h3>DESAFIO 01</h3>
    <p>Um supermercado deseja automatizar o caixa de uma compra. Crie um programa em
PHP que armazene o nome de 5 produtos e o valor de cada um. Em seguida, calcule:
● Valor total da compra.
● Valor médio dos produtos.
● Desconto de 8%.
● Valor final da compra.
● Valor de cada parcela em 4 vezes.</p>

<p>
    <?php echo("Valor Total da Compra: R$ " . $SubTotal); ?>
    <p></p>
    <?php echo("Valor Médio dos Produtos: R$ " . ($SubTotal / 5)); ?>
    <p></p>
    <?php echo("Desconto de 8%: R$ " . $Desconto); ?>
    <p></p>
    <?php echo("Valor Final da Compra: R$ " . $ValorFinal); ?>
    <p></p>
    <?php echo("Valor de Cada Parcela em 4 Vezes: R$ " . $Parcelas); ?>
</p>
    
</body>
</html>
<?php
$Buffet = 8500.00;
$Decoraçao = 2800.00;
$Sonorizalçao = 3200.00;
$Subtotal = $Buffet + $Decoraçao + $Sonorizalçao;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 6</title>
</head>
<body>
    <h3> Atividade 06 </h3>
    <P>Uma empresa de eventos contratou três fornecedores. O buffet custou
R$ 8.500,00, a decoração R$ 2.800,00 e a sonorização R$ 3.200,00. Calcule o
valor total gasto.

</P>
<p>
    <?php echo ("Total:" . $Subtotal); ?>
</p>

    
</body>
</html>
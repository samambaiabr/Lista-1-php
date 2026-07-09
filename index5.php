<?php
$Custo = 4500.00;
$DescontoaVista = $Custo * 0.10;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 5</title>
</head>
<body>
    <h3> Atividade 05 </h3>
    <P>Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.


</P>
<p>
    <?php echo ("FALTA PAGAR:" . $DescontoaVista); ?>
</p>

    
</body>
</html>
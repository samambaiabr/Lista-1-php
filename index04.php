<?php
$Organizadora = 18000.00;
$Gastos = 12750.00;
$restante = $Organizadora - $Gastos;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 4</title>
</head>
<body>
    <h3> Atividade 04 </h3>
    <P>Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.

</P>
<p>
    <?php echo ("FALTA PAGAR:" . $restante); ?>
</p>

    
</body>
</html>
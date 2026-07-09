<?php
$Notebook = 3800.00;
$Pago = 5000.00;
$Troco = $Notebook - $Pago;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 7</title>
</head>
<body>
    <h3> Atividade 07   </h3>
    <P>Um organizador comprou um notebook por R$ 3.800,00 e pagou com
R$ 5.000,00. Calcule o valor do troco.


</P>
<p>
    <?php echo ("Troco:" . $Troco); ?>
</p>

    
</body>
</html>
<?php
$Servico = 2500.00;
$entrada = 1000.00;
$restante = $Servico - $entrada;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 3</title>
</head>
<body>
    <h3> Atividade 03 </h3>
    <P>Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
    pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
</P>
<p>
    <?php echo ("FALTA PAGAR:" . $restante); ?>
</p>

    
</body>
</html>
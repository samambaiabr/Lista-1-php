<?php
$Bonus = 0.05;
$Arregadado = 42000.00;
$ValordeBonus = $Bonus * $Arregadado;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Atividade 08 </h3>
    <P>Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
        o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
        bônus.
    </P>
    <p>
    <?php echo("Bonus:" . $ValordeBonus); ?>
    </p>
</body>

</html>
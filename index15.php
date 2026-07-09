<?php
 $Reais = 500.00;
 $Cotaçao = 5.00;
 $Conversao = $Reais/$Cotaçao;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 15</title>
</head>

<body>
    <h3>ATIVIDADE 15</h3>
    <P>Faça um algoritmo que realize uma operação cambial. O turista deve informar
        o valor que possui em reais e a cotação do dólar naquele dia. O algoritmo deverá
        converter o valor para dólares.
    </P>
    <P><?php echo("Conversao:" . $Conversao) ?></P>
</body>

</html>
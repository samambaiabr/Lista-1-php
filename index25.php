<?php
$Sanduiches = 10;
$PesoQueijo = 100;
$PesoPresunto = 50;
$PesoHamburguer = 100;
$TotalQueijo = $Sanduiches * $PesoQueijo;
$TotalPresunto = $Sanduiches * $PesoPresunto;
$TotalHamburguer = $Sanduiches * $PesoHamburguer;
$KgQueijo = $TotalQueijo / 1000;
$KgPresunto = $TotalPresunto / 1000;
$KgHamburguer = $TotalHamburguer / 1000;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 25</title>
</head>
<body>
    <h3>ATIVIDADE 25</h3>
    <P>A lanchonete Gostosura vende sanduíches com duas fatias de queijo, uma fatia
de presunto e uma rodela de hambúrguer. Cada fatia de queijo ou presunto pesa
50 gramas, e cada hambúrguer pesa 100 gramas. Faça um algoritmo que leia a
quantidade de sanduíches e informe, em quilos, quanto será necessário comprar
de queijo, presunto e carne</P>
<p>
    <?php echo("Quantidade de Sanduiches:" . $Sanduiches) ; ?>
    <p></p>
    <?php echo("Total de Queijo em Kg: " . $KgQueijo) . "Kg" ;  ?>
    <p></p>
    <?php echo("Total de Presunto em Kg: " . $KgPresunto) . "Kg" ; ?>
    <p></p>
    <?php echo("Total de Hamburguer em Kg: " . $KgHamburguer) . "Kg"; ?>
</p>

</body>
</html>
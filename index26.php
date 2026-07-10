<?php
$Peso = 70;
$Altura = 1.75;
$SomadAltura = $Altura * $Altura;
$Imc = $Peso / $SomadAltura;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 26</title>
</head>
<body>
    <H3>ATIVIDADE 26</H3>
    <P>Faça um algoritmo que receba o peso e a altura de uma pessoa e calcule o
índice de massa corpórea. O IMC é calculado dividindo o peso, em quilos, pelo
quadrado da altura, em metros. (Pesquise a fórmula)
</P>
    <p>
        <?php echo("Peso: " . $Peso . "kg") ?>
        <P></P>
        <?php echo("Altura: " . $Altura . "m") ?>     
         <P></P>   
        <?php echo("IMC: " . $Imc) ?>
        </p>

</body>
</html>
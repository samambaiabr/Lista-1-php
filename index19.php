<?php
$AnoNascimento = 2000;
$AnoAtual = 2026;
$idadeAtual = $AnoAtual - $AnoNascimento;
$idadeFutura= 2028 - $AnoNascimento;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 19</title>
</head>
<body>
    <h3>ATIVIDADE 19</h3>
    <P>Faça um algoritmo que receba o ano de nascimento de uma pessoa, calcule e
mostre a idade atual dessa pessoa e quantos anos ela terá em 2028.
</P>
<p>
    <?php echo("Idade Atual 2026: " . $idadeAtual) ?>
    <p></p>
    <?php echo("Idade Futura 2028: " . $idadeFutura) ?>
</p>
</body>
</html>
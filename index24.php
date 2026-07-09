<?php
$PesodoPrato = 0.750;
$PrecoPorQuilo = 12.00;
$ValorTotal = $PesodoPrato * $PrecoPorQuilo;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 24</title>
</head>

<body>
    <H3>ATIVIDADE 24</H3>
    <P>O restaurante a quilo Bem-Bão cobra R$ 12,00 por cada quilo de refeição.
        Escreva um algoritmo que leia o peso do prato montado pelo cliente, em quilos, e
        imprima o valor a pagar. Considere que a balança já desconta o peso do prato.</P>
        <p>
         <?php echo("Peso do prato: " . $PesodoPrato . "kg") ?>
         <P></P>
         <?php echo("Preço por quilo: R$" . $PrecoPorQuilo) ?>     
          <P></P>   
        <?php echo("Valor a pagar: R$" . $ValorTotal) ?>
        </p>
</body>

</html>
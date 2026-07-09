<?php
 $Nota7 = 7;
 $Nota8 = 8;
 $Nota9 = 9;
 $Nota6 = 6;
 $Soma = $Nota7 + $Nota8 + $Nota6 + $Nota9;
 $mediaTotal = $Soma / 4;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 12</title>
</head>
<body>
    <H3>ATIVIDADE 12</H3>
    <p>Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
    resultado na tela. (Pesquise a fórmula)</p>
<p>
    <?php echo("MEDIA:" . $mediaTotal) ?>
</p>
    
</body>
</html>
<?php
$numero = 10;
$numeroSucersor = $numero + 1;
$numeroAntecessor = $numero - 1;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 20</title>
</head>
<body>
    <h3>ATIVIDADE 20 </h3>
    <P>Faça um algoritmo que leia um número inteiro e imprima seu sucessor e seu
antecessor.
</P>
<p>
    <?php echo("Numero:" ). $numero; ?>
    <p></p>
    <?php echo("Numero Antecessor:" ). $numeroAntecessor; ?>
    <p></p>
    <?php echo("Numero Sucersor:" ). $numeroSucersor; ?>
    
</p>
</body>
</html>
<?php
$pessoas = 120;
$valorBuffet = 85.00;
$valorBuffetTotal = $pessoas * $valorBuffet;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 2</title>
</head>
<body>
    <h3> Atividade 02 </h3>
    <P>Um buffet cobra R$ 85,00 por pessoa para fornecer alimentação durante um
evento. Crie variáveis para armazenar a quantidade de convidados e calcule o
valor total do buffet.
</P>
<p> 
    <?php echo ("ORÇAMENTO:" . $valorBuffetTotal); ?>
</p>
    
</body>
</html>
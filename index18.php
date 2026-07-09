<?php
$Funcionario = "João"; 
$SalarioFixo = 1500.00;
$ValordeVendas = 4000.00;
$vendasComComissao = $ValordeVendas * 0.15;
$SalarioFinal = $SalarioFixo + $vendasComComissao;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 18</title>
</head>
<body>
    <H3>ATIVIDADE 18</H3>
    <p>Escreva um algoritmo que leia o nome de um vendedor, seu salário fixo e o total
de vendas efetuadas no mês. Sabendo que ele ganha 15% de comissão sobre as
vendas, informe o nome, o salário fixo e o salário final do mês.
</p>
<p>
    <?php echo("FUNCIONARIO:" . $Funcionario )?>
    <p></p>
    <?php echo("SALARIO FIXO:" . $SalarioFixo ) ?>
    <?php echo("VALOR:" . $ValordeVendas )  ?>
    <p>COMISSAO DE 15%</p>
    <?php echo("SALRIO+COMISSAO:" . $SalarioFinal ) ?>
</p>



</body>
</html>
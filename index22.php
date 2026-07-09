<?php
$Valorpaozinho = 0.12 ;
$PaesVendidos = 100.00;
$TotalDeVendasPAES = $Valorpaozinho * $PaesVendidos;
$ValordaBroa = 1.50;
$BroaVendidas = 20;
$TotalDeVendasBROAS = $ValordaBroa * $BroaVendidas;
$TotaldeVendas = $TotalDeVendasBROAS + $TotalDeVendasPAES;
$Poupança = $TotaldeVendas * 0.10;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE 22</title>
</head>
<body>
    <h3>ATIVIDADE 22</h3>
    <P>A padaria Hotpão vende pães franceses e broas todos os dias. Cada pãozinho
custa R$ 0,12 e cada broa custa R$ 1,50. Faça um algoritmo que leia a
quantidade de pães e broas vendidas, calcule o total arrecadado e quanto deverá
ser guardado na poupança, considerando 10% do total.</P>  

<p>
    <?php echo("Total de Paes Vendidos:" . $PaesVendidos); ?>
    <p></p>
    <?php echo("Total de Paes Arregadado R$: " . $TotalDeVendasPAES); ?>
    <P></P>
    <?php echo("Total de Broa Vendidos:" . $BroaVendidas); ?>
    <p></p>
    <?php echo("Total de Broa´s Arregadado R$: " . $TotalDeVendasBROAS); ?>
    <p></p>
    <?php echo("Total da Venda: "). $TotaldeVendas; ?>
    <p>DEPOSITO NA POUPANÇA DE 10%</p>
    <?php echo("Deposito na Poupança:" . $Poupança); ?>

</p>
</body>
</html>
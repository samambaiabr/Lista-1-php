<?php
$nomeCliente = "Joao ";
$NomeEvento = "Festa de Aniversario";
$Valor = 1000.00;
$Participantes = 50;
$ValorParticipante = 10;
$Entrada = $Valor * 0.30;
$valorRestante = $Valor - $Entrada;
$ValorComDesconto = $valorRestante * 0.10;
$taxaOrganizacao = $ValorComDesconto * 0.05;
$valorFinal = $ValorComDesconto + $taxaOrganizacao;
$valorMedio = $valorFinal / $Participantes;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
</head>

<body>
    <h3>ATIVIDADE 10</h3>
    <P>Criar variáveis para armazenar: Nome do cliente, Nome do evento, Quantidade
        de participantes, Valor por participante
    </P>
    <p>
        <?php
        echo ("Valor Total:") . $Valor . "<br>";
        echo ("Participantes:") . $Participantes . "<br>";
echo ("Entrada (30%):") . $Entrada . "<br>";
echo ("Valor Restante:") . $valorRestante . "<br>";
echo ("Valor com Desconto (10%):"). $ValorComDesconto . "<br>";
echo ("Taxa de Organização (5%): ") . $taxaOrganizacao . "<br>";
echo ("Valor Final com Taxa: ") . $valorFinal . "<br>";
echo ("Valor Médio por Participante:") . $valorMedio . "<br>"; 
        ?>
    </p>


</body>

</html>
<?php
// Dados recebidos do formulário
$nome = $_POST['tnome'];
$anoNascimento = (int) $_POST['tano'];

// Idade atual
$anoAtual = (int) date('Y');
$idade = $anoAtual - $anoNascimento;
//considerar ano bissexto , entao 365.25
$diasVividos = $idade * 365.25;
$horasVividas = $diasVividos * 24;
$minutosVividos = $horasVividas * 60;

$bpmMedio = 75;
$respiracoesPorMinuto = 17;

$batimentosTotais = $minutosVividos * $bpmMedio;
$respiracoesTotais = $minutosVividos * $respiracoesPorMinuto; //calcular e exibir também, o total de respiraçãoes

$expectativaVida = 95;
$anosRestantes = $expectativaVida - $idade;
$batimentosRestantes = ($expectativaVida * 365.25 * 24 * 60 * $bpmMedio) - $batimentosTotais;
$respiracoesRestantes =$batimentosRestantes * $respiracoesPorMinuto;

//echo "<h2>$nome, sua idade é $idadeAtual</h2>";
?>  <!-- FECHAR O PHP -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo de Vida</title>
</head>
<body>
    <h1>Tempo de vida</h1>
    <hr>
    <h2><?php echo $nome ?> sua idade é: <?php echo  number_format($idade,0,",",".") ?> anos</h2>
    
</body>
</html>



/*


*/
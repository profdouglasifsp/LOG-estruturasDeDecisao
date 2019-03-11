<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));


$inicio = microtime(true);
for($i=0;$i<100000;$i++){
    if ($idade < 13) {
        echo("Você é criança\n");
    }
    if ($idade < 18 && $idade >= 13) {
        echo("Você é adolescente\n");
    }
    if ($idade < 60 && $idade >= 18) {
        echo("Você é adulto\n");
    } 
    if ($idade >= 60){
        echo("Você é idoso\n");
    }
}
$tempoifs = microtime(true) - $inicio;

$inicio = microtime(true);
for ($i=0;$i<100000;$i++) {
    if ($idade < 13) {
        echo("Você é criança\n");
    } elseif ($idade < 18) {
        echo("Você é adolescente\n");
    } elseif ($idade < 60) {
        echo("Você é adulto\n");
    } else {
        echo("Você é idoso\n");
    }
}
$tempoifelseif = microtime(true) - $inicio;

$inicio = microtime(true);
for ($i=0;$i<100000;$i++) {
    switch ($idade) {
        case ($idade<13):
            echo("Você é criança\n");
            break;
        case ($idade<18):
            echo("Você é adolescente\n");
            break;
        case ($idade<60):
            echo("Você é adulto\n");
            break;
        default:
            echo("Você é idoso\n");
    }
}
$tempocase = microtime(true) - $inicio;

echo "esse programa demorou $tempoifs segundos para executar em IF\n";
echo "esse programa demorou $tempoifelseif segundos para executar em IF-ELSE-IF\n";
echo "esse programa demorou $tempocase segundos para executar em SWITCH-CASE\n";
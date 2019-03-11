<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));
$inicio = microtime(true);
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
$tempo = microtime(true) - $inicio;
echo "esse programa demorou $tempo microsegundos para executar\n";
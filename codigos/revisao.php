<?php
echo('Digite o primeiro numero: ');
$n1 = trim(fgets(STDIN));
echo('Digite o segundo numero: ');
$n2 = trim(fgets(STDIN));
$soma = $n1 + $n2;
echo("O resultado é $soma!\n");

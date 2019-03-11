<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));
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

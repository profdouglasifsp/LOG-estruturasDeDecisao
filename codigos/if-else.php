<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));
if ($idade < 18) {
    echo("Você é maior de idade\n");
} else {
    echo("Você é menor de idade\n");
}

<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));
echo($idade >= 18 ? "Você é maior de idade\n" : "Você é menor de idade\n");

<?php
echo("Nos conte sua idade: ");
$idade = trim(fgets(STDIN));
if ($idade < 20) {
    echo("Você é muito jovem\n");
}

<?php

print "Calcule a redução do tempo de vida de um fumante.\n";

print "Digite a quantidade de cigarros fumados por dia: ";
$cigarros_por_dia = (int)fgets(STDIN);

print "Digite a quantidade de anos que o usuário fumou: ";
$quantidade_anos = (float)fgets(STDIN);

$total_cigarros = ($quantidade_anos * 365) * $cigarros_por_dia;
$dias_vida = ($total_cigarros * 10) / 1440;
$dias_vida = round($dias_vida);

print "O usuário perderá $dias_vida dias de vida.";

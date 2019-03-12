<?php
print "Calcule a redução do tempo de vida de um fumante.";

print "Digite a quantidade de cigarros fumados por dia: ";
$cigarros_por_dia = fgets(STDIN);

print "Digite a quantidade de anos que o usuário fumou: ";
$quantidade_anos = fgets(STDIN)

$total_cigarros = ($quantidade_anos * 365) * $cigarros_por_dia;
$dias_vida = ($total_cigarros * 10) / 24;

print "O usuário perderá $dias_vida dias de vida.";

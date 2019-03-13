<?php
print "Digite a quantidade de dias: ";
$dias= (float)fgets(STDIN);

print "Digite a quantidade de horas: ";
$horas= (float)fgets(STDIN);

print "Digite a quantidade de minutos: ";
$minutos= (float)fgets(STDIN);

print "Digite a quantidade de segundos: ";
$segundos1= (float)fgets(STDIN);

$diassegundos= $dias*24*60*60;

$horassegundos= $horas*60*60;

$minutossegundos= $minutos*60;

$segundostotais= $diassegundos+$horassegundos+$minutossegundos+$segundos1;

print "Quantidade total de segundo(s): $segundostotais";

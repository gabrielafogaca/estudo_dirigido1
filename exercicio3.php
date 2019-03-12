<?php
print "Digite o valor do salário: ";
$salario = fgets(STDIN);

print "Digite a % do aumento do salário: "
$aumento = fgets(STDIN);

print "Valor do aumento: $aumento";

$novosalario = $salario*$aumento;

print "O novo salário será de: $novosalario";

print "Digite o valor do salário: ";
$salario = (float)fgets(STDIN);

print "Digite a % do aumento do salário: ";
$aumento = (float)fgets(STDIN);

$aumentoreal = $aumento/100;
$valoraumento = $salario*$aumentoreal;

print "Valor do aumento: $valoraumento reais";

$novosalario = $salario+$aumento;

print "\nO novo salário será de: $novosalario reais";

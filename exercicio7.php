<?php

print "Aluguel de carro\n";
 print "Digite a quantidade de km percorridos pelo carro: ";
 $km_carro = (float)fgets(STDIN);

print "Digite a quantidade de dias pelos quais o carro foi alugado: ";
$dias_alugado = (int)fgets(STDIN);
$preco_pagar = ($dias_alugado*60) + ($km_carro*0.15);

print "O preço a pagar será de: $preco_pagar reais";

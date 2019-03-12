<?php
print "Viagem de carro";

print "Digite a distância a percorrer: ";
$distancia = fgets(STDIN);

print "Digite a velocidade média: ";
$velocidade = fgets(STDIN);

$tempo = $distancia*$velocidade;

print "O tempo da viagem será de: $tempo";

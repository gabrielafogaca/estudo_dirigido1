<?php
print "Viagem de carro\n";

print "Digite a distância a percorrer(Km): ";
$distancia = (float)fgets(STDIN);

print "Digite a velocidade média(Km/h): ";
$velocidade = (float)fgets(STDIN);

$tempo = $distancia/$velocidade;

print "O tempo da viagem será de: $tempo hora(s)";

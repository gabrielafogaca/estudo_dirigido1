<?php
 
 print "Digite uma temperatura em Celsius: ";
 $temperatura_celsius = fgets(STDIN);
 $tempetura_f = ((9*$temperatura_celsius)/5)+32;
 
 print "A temperatura em Fahrenheit será de: $tempetura_f ºF";

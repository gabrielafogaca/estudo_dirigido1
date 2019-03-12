<?php

 print "Digite o preço da mercadoria: ";
 $mercadoria = fgets(STDIN);

 print "Digite o percentual de desconto: ";
 $desconto = fgets(STDIN);

 $novopreco = $mercadoria-$desconto;

 print "O valor de desconto foi de: $desconto";

 print "O preço a pagar será de: $novopreco"

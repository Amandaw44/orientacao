<?php

//media de 3 numeros
function media($a, $b, $c){
  $soma = $a + $b + $c;
  $media = $soma / 3;

  return $media;
}

//programa principal
$a = 10;
$b = 20;
$c = 30;
echo media(23.4, $c, $a);


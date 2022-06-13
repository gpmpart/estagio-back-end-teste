<?php
  function search(int $y, int $x, array $array)
  {
    // ESCREVA SEU CÓDIGO AQUI
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  $array[0] = ['1', '2', '3', '4', '5', '6', '7', '8', '9'];
  $array[1] = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i'];
  $array[2] = ['!', '@', '#', '$', '%', '^', '&', '*', '('];

  while($input = fscanf(STDIN, "%s\n")) {
    [$y, $x] = explode(',', $input[0]);

    echo search(intval(trim($y)), intval(trim($x)), $array).PHP_EOL;
  }
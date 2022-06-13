<?php
  function hypotenuse(int $a, int $b)
  {
    // ESCREVA SEU CÓDIGO AQUI
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  while($input = fscanf(STDIN, "%s\n")) {
    [$a, $b] = explode(',', $input[0]);

    echo hypotenuse(intval(trim($a)), intval(trim($b))).PHP_EOL;
  }
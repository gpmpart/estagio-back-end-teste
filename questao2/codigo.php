<?php
  function evenOdd(int $number)
  {
    // ESCREVA SEU CÓDIGO AQUI
  }

  function tenth(int $number)
  {
    // ESCREVA SEU CÓDIGO AQUI
  }

  // NÃO MODIFICAR NADA ABAIXO DESSA LINHA
  while($input = fscanf(STDIN, "%s\n")) {
    $number = intval(trim($input[0]));

    echo "number: ".$number."\ttenth: ".tenth($number)." \t even/odd: ".evenOdd($number).PHP_EOL;
  }
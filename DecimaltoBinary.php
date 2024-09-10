<?php

function decimalToBinary($decimalNumber)
{
  $binaryNumber = array(); // To store binary digits

  while ($decimalNumber > 0)
  {
    $binaryNumber[] = $decimalNumber % 2;
    $decimalNumber = (int)($decimalNumber / 2);
  }

  echo "Binary equivalent: ";
  for ($i = count($binaryNumber) - 1;$i >= 0;$i--)
  {
    echo $binaryNumber[$i];
  }
  echo "\n";
}


$decimalNumber = 15;

decimalToBinary($decimalNumber);

?>
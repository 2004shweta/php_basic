<?php

function transposeMatrix($matrix, $rows, $cols)
{
  $transposedMatrix = [];

  for ($i = 0;$i < $cols;++$i)
  {
    for ($j = 0;$j < $rows;++$j)
    {
      $transposedMatrix[$i][$j] = $matrix[$j][$i];
    }
  }


  echo "Transposed Matrix:\n";
  for ($i = 0;$i < $cols;++$i)
  {
    for ($j = 0;$j < $rows;++$j)
    {
      echo $transposedMatrix[$i][$j] . "\t";
    }
    echo "\n";
  }
}
$matrix = [[1, 2, 3], [4, 5, 6]];
$rows = 2;
$cols = 3;

// Call the function to perform matrix transpose
transposeMatrix($matrix, $rows, $cols);

?>
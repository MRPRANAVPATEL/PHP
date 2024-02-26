<?php

function is_prime($n)
{
  if ($n == 1 || $n % 2 == 0) {
    return false;
  }

  for ($i = 3; $i <= sqrt($n); $i += 2) {
    if ($n % $i == 0) {
      return false;
    }
  }
  return true;
}

$numbers = array(2, 3, 5, 7, 13, 17, 23, 29);
foreach ($numbers as $number)

{
  if (is_prime($number)) {
    echo $number . " is prime\n";
  } else {
    echo $number . " is not prime\n";
  }
}
?>

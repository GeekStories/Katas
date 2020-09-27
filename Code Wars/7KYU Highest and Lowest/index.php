<?php

//https://www.codewars.com/kata/554b4ac871d6813a03000035

function highAndLow($numbers) {
  $a = explode(' ', $numbers);
  return max($a) . " " . min($a);
}

?>
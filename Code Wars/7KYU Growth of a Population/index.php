<?php

//https://www.codewars.com/kata/563b662a59afc2b5120000c6

function nbYear($p0, $percent, $aug, $p) {
  $years=0; 
  do {
    $p0 *= (1 + ($percent / 100));
    $p0 += $aug;
    $years++;
  }while($p0<$p);
  
  return $years;
}

?>
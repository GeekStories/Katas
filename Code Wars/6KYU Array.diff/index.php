<?php

//https://www.codewars.com/kata/523f5d21c841566fde000009

function arrayDiff($a, $b) {
  if(count($b) == 0 || count($a) == 0)
    return $a;
  
  $unique = array();
  
  foreach($a as $x){
    if(!in_array($x, $b)){
      array_push($unique, $x);
    }
  }
  
  return $unique;
}

?>
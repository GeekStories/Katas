<?php

//https://www.codewars.com/kata/54da5a58ea159efa38000836

function findIt(array $seq) : int{
  $c = array();
  
  foreach($seq as $x){
    $c[$x]++;
  }
  
  foreach($c as $val){
    if($val % 2 == 1)
      return array_search($val, $c);
  }
}

?>
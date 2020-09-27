<?php
// https://www.codewars.com/kata/554e4a2f232cdd87d9000038

function DNA_strand($dna) {
  $string = "";
  
  foreach(str_split($dna) as $x){
    if($x == "A")
      $string .= "T";
    if($x == "T")
      $string .= "A";
    if($x == "G")
      $string .= "C";
    if($x == "C")
      $string .= "G";
  }
  
  return $string;
}

?>
<?php

//https://www.codewars.com/kata/5266876b8f4bf2da9b000362

function likes( $names ) { 
  switch(count($names)){
      case 0:
        return "no one likes this";
      case 1:
        return $names[0] . " likes this";
      case 2:
        return $names[0] . " and " . $names[1] . " like this";
      case 3:
        return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
      default:
        return $names[0] . ", " . $names[1] . " and " . strval(count($names)-2) . " others like this";
  }
}

?>
<?php
//https://www.codewars.com/kata/526571aae218b8ee490006f4

function countBits($n) {
   return strlen(str_replace("0","",decbin($n)));
}

?>
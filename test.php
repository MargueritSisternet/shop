<?php
 
$x = 6;
 
function scope(){
    $y = 7;
 
    echo $y; // prints 'undefined variable'
  
    global $x;
    echo $x; // prints 6
    
    echo $y; // prints 7
}
 
scope();

?>
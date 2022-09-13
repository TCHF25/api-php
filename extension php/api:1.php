<?php

function get() {
   $name = $_GET["name"];
   $return = "";

function palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
}

if (palindrome($name)){ 
    $return = "palindrome";
}
else { 
    $return = "not a palindrome"; 
}

$data = array("name" => $name, "return" => $return);

echo json_encode($data);
}

if(isset($_GET["name"]))
{
    get();
}

?>

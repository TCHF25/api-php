<?php 

function calculate($password) {
    $result = "Strong";

    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $symbol    = preg_match('@[$!%*#?&]@', $password);
    
    if(!$uppercase || !$symbol || !$lowercase || !$number || strlen($password) < 12) {
        $result = "Not Strong";
    }

    $data = array("pass" => $password, "Strength" => $result);

    return json_encode($data );
}

echo calculate($_POST["password"]);

?>
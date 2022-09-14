<?php

function calculate() {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $res = pow($a, 3) + ($b * $c) - ($a/$b);

    $data = array("result" => $res);

    echo json_encode($data );
}

if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']))
{calculate();  }


?>
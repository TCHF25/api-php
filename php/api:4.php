<?php

$christmas = date('Y-12-25');
$today     = date('Y-m-d');

if ($today > $christmas) {
    $christmas = date('Y-12-25', strtotime($christmas.'+1 year'));
}

echo round((strtotime($christmas) - strtotime($today)));

?>
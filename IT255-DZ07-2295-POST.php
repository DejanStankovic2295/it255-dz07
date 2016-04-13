<?php

$poluprecnik = $_POST['poluprecnik'];
header("Content-type: application/json");
$test_array = array(
    'povrsinaKruga:' => ($poluprecnik * $poluprecnik * 3.14159),
    'obimKruga:' => (2 * $poluprecnik * 3.14159)
);
echo json_encode($test_array);

?>
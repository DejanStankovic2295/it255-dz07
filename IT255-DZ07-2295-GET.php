<?php
$brojIndeksa = $_GET['brojIndeksa'];
if ($brojIndeksa == "2295") {
    header("Content-type: application/json");
    $test_array = array(
        'ime' => 'Dejan',
        'prezime' => 'Stankovic',
        'smer' => 'Informacione tehnologije'
    );
    echo json_encode($test_array);
} else {
    header("Content-type: application/json");
    $test_array = array(
        'rezultat' => 'Unesite broj indeksa 2295'
    );
    echo json_encode($test_array);
}
?>
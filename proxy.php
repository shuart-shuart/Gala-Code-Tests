<?php
$url = "https://docs.google.com/spreadsheets/d/1B_bqGGqrtBrM8aNIaHsmsbIjeGA7KH3vet-DptWE0NM/gviz/tq?tqx=out:csv&range=A2%3AB1000";

$response = file_get_contents($url);

header('Content-Type: text/csv');
echo $response;
?>

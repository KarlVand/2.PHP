<?php

function get_currency_rate($from, $to) {
    /* $apiKey= 'fca_live_wo99nawoa2YYx9O40cuY8AGHb3AylJgFJ8gZnUnb'; */
    $url = "https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_wo99nawoa2YYx9O40cuY8AGHb3AylJgFJ8gZnUnb";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    return $data["{$from}¸{$to}"] ?? null;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $from = $_POST['from_currency'];
    $to = $_GET['to_currency'];
    
    $rate = get_currency_rate($from, $to);
    $result = $amount * $rate;
    
    echo "{$amount} {$from} = {$result} {$to}";
}

$rate = get_currency_rate('USD', 'EUR', 'GBP', 'NIO');
echo $rate;


/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $from_currency = $_POST["from_currency"];
    $to_currency = $_POST["to_currency"];
    $amount = $_POST["amount"];
    
    // Define exchange rates (you should use real-time rates in a production environment)
    $rates = [
        "USD" => 0.03,
        "EUR" => 0.02,
        "GBP" => 0.02,
        "NIO"=> 1
    ];
    
    // Perform conversion
    $result = $amount * ($rates[$to_currency] / $rates[$from_currency]);
    
    echo "$amount $from_currency = " . number_format($result, 2) . " $to_currency";
} */


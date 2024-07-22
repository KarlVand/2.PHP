<?php
$dsn = "mysql:host=localhost;dbname=testdb;charset=utf8mb4";
$username = "your_username";
$password = "your_password";

try {
    $pdo = new PDO($dsn, $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

function getCurrencyRates($base = "BRL") {
    
    $_SERVER['REQUEST_METHOD'] === 'GET';
    $url = "https://api.freecurrencyapi.com/v1/latest?apikey=fca_live_wo99nawoa2YYx9O40cuY8AGHb3AylJgFJ8gZnUnb";
    $curl = curl_init($url);
    $resp = curl_exec($curl);
    var_dump($resp);
    
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    
    $targetCurrencies = ["EUR", "GBP", "USD"];
    $currency = "BRL";
    $pairs = [];
        foreach ($targetCurrencies as $currency) {
    $pairs[] = $base . '_' . $currency;
    }
    $pairsString = implode(',', $pairs);

    return [
        'EUR' => $data["{$base}_EUR"],
        'GBP' => $data["{$base}_GBP"],
        'USD' => $data["{$base}_USD"]
    ];
}



if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['convert'])) {
    $amount = floatval($_POST["amount"]);
    $other_currency = $_POST["other_currency"];
    $mode = $_POST["mode"];
    
    $rates = getCurrencyRates('BRL');
    if ($mode === 'from_brl') {
        $result = $amount * $rates[$other_currency];
        echo "{$amount} BRL = {$result} {$other_currency}";
    } else {
        $result = $amount / $rates[$other_currency];
        echo "{$amount} {$other_currency} = {$result} BRL";
    }
    
    // Display all rates
    
    "<br><br>Current rates (1 BRL):<br>";
    foreach ($rates as $currency => $rate) {
        echo "1 BRL = {$rate} {$currency}<br>";
    }

}





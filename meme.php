<?php
// List of fun crypto-related name parts (prefixes and suffixes)
$prefixes = [
    "Moon", "Crypto", "Doge", "Shiba", "Panda", "Pump", "Fomo", "Hodl", "Pepe", "Floki",
    "Baby", "Super", "Mega", "Ultra", "Lucky", "Rocket", "Tiger", "Bear", "Wolf", "Ghost"
];

$suffixes = [
    "Coin", "Token", "Cash", "Dollars", "Bits", "Bucks", "Cash", "Cash", "Fund", "Swap",
    "Chain", "Block", "Byte", "Hash", "Mint", "Pump", "Moon", "Rocket", "Shark", "Bull"
];

// Generate a random name by combining prefix + suffix
function generateRandomCoinName($prefixes, $suffixes) {
    $prefix = $prefixes[array_rand($prefixes)];
    $suffix = $suffixes[array_rand($suffixes)];
    return $prefix . $suffix;
}

// Generate a random 3-5 letter uppercase ticker symbol
function generateRandomTicker() {
    $length = rand(3, 5);
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $ticker = '';
    for ($i = 0; $i < $length; $i++) {
        $ticker .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $ticker;
}

// Number of coins to generate (default 5)
$count = $argv[1] ?? 5;

for ($i = 0; $i < $count; $i++) {
    $name = generateRandomCoinName($prefixes, $suffixes);
    $ticker = generateRandomTicker();
    echo "Coin Name: $name, Ticker: $ticker\n";
}

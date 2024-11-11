<?php
$age = 11;

$matchOutputAge = match (true) {
    $age < 2 => 'eres un bebe',
    $age < 10 => 'eres un nino',
    $age < 18 => 'eres un adolecente',
    default => 'Eres un adulto'
};

echo $matchOutputAge;

<?php
//Contante global:
define('ALGO', 'esto es algo');

//constantes normales
const NOMBRE = 'namecito';



$name = "jhon";
$isDev = true;
$age = 11;
// + solo sirve para sumar
$mixAge = $age + '1';

// . para concatenar
$concatAge = $age . 5;

//ternario
$outputAge = $age < 18 ? 'es menor' : 'es mayor';

$matchOutputAge = match (true) {
    $age < 2 => 'eres un bebe',
    $age < 10 => 'eres un nino',
    $age < 18 => 'eres un adolecente',
    default => 'Eres un adulto'
};


$toPrint = sprintf('%s', $concatAge);
echo gettype($name);

var_dump($name);
var_dump($isDev);
var_dump($age);
?>

<h1>
    <?= $matchOutputAge ?>
</h1>

<?php
$languages = ["php", "Js", "python"];
$languages[] = "python";
$languages[] = "dart";
?>
<ul>
    <?php foreach ($languages as $key => $language): ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach ?>
</ul>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
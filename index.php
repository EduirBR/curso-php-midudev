<?php
#inicializar una nueva sesion de Curl; ch = curl handle
const API_URL = 'https://whenisthenextmcufilm.com/api';
$ch = curl_init(API_URL);
//recibir resultado de la peticion sin mostrarlo
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>La Proxima pelicula de marvel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Centered viewport -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<body>
    <section>
        <img src="<?= $data['poster_url'] ?>" alt="<?= $data['title'] ?>" width="300">
    </section>
    <hgroup>
        <h3><?= $data['title'] ?></h3>
        <h4>se estrena en <?= $data['days_until'] ?></h4>
        <p>Fecha de estreno: <?= $data['release_date'] ?></p>
        <p>La siguiente es: </p>
        <p><b> <?= $data['following_production']['title'] ?></b></p>
    </hgroup>
</body>

</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        margin-top: 50px;
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
</style>
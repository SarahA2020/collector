<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AFL Player Cards Collection</title>
        <!--<link href="normalise.css" type="text/css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet"> -->
        <meta name=’viewport” content=”width=device-width, initial-scale=0.1”>
    </head>

    <body>
        <h1>AFL Player Cards</h1>

        <section class="container">
            <div class="card1">
                <div class="card_top">
                    <h2 class="player_name"></h2>
                    <h2 class="club"></h2>
                </div>
                <img>
                <div class="stats">
                    <p class="position"></p>
                    <p class="DOB"></p>
                    <p class="height"></p>
                    <p class="weight"></p>
                </div>
            </div>

            <div class="card2">
                <div class="card_top">
                    <h2 class="player_name"></h2>
                    <h2 class="club"></h2>
                </div>
                <img>
                <div class="stats">
                    <p class="position"></p>
                    <p class="DOB"></p>
                    <p class="height"></p>
                    <p class="weight"></p>
                </div>
            </div>

            <div class="card3">
                <div class="card_top">
                    <h2 class="player_name"></h2>
                    <h2 class="club"></h2>
                </div>
                <img>
                <div class="stats">
                    <p class="position"></p>
                    <p class="DOB"></p>
                    <p class="height"></p>
                    <p class="weight"></p>
                </div>
            </div>

            <!-- etc -->

        </section>

    </body>

</html>


<?php

$db = new PDO('mysql:host=db;dbname=AFL Player Cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `player_first_name`, `player_last_name`, `club`, `position`, `DOB`, `height`, `weight` FROM `card_details`;');

$query->execute();

$results = $query->fetchAll();

var_dump($results);

foreach($results as $user) {
    echo '<h2 class="player_name">' . $user['player_first_name'] . ' ' . $user['player_last_name'] . '</h2>';
}

foreach($results as $user) {
    echo '<h2 class="club">' . $user['club'] . ' </h2>';
}

foreach($results as $user) {
    echo '<p class="position">' . 'Position: ' . $user['position'] . ' </p>';
}

foreach($results as $user) {
    echo '<p class="DOB">' . 'DOB: ' . $user['DOB'] . ' </p>';
}

foreach($results as $user) {
    echo '<p class="height">' . 'Height: ' . $user['height'] . ' m' . ' </p>';
}

foreach($results as $user) {
    echo '<p class="weight">' . 'Weight: ' . $user['weight'] . ' kg' . ' </p>';
}
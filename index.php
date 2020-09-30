<?php

$db = new PDO('mysql:host=db;dbname=AFL Player Cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `player_first_name`, `player_last_name`, `club`, `image`, `position`, `DOB`, `height`, `weight` FROM `card_details`;');

$query->execute();

$results = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AFL Player Cards Collection</title>
        <link href="normalize.css" type="text/css" rel="stylesheet">
        <link href="style.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kulim+Park&family=Poppins&family=Ubuntu&display=swap" rel="stylesheet">
        <meta name=’viewport” content=”width=device-width, initial-scale=0.1”>
    </head>

    <body>
        <h1>AFL Player Cards Collection</h1>
        <p class="intro">Welcome to my awesome collection of Australian Rules Football player cards. Each card displays the photo and stats of the some of the best players in the league.</p>

        <section class="grid_container">

            <?php

            foreach($results as $player) {
                echo '<div class="card ' . str_replace(' ', '_',$player['club']) . '">';
                echo '<div class="card_top">';
                echo '<h2 class="player_name">' . $player['player_first_name'] . ' ' . $player['player_last_name'] . '</h2>';
                echo '<h3 class="club">' . $player['club'] . ' </h3>';
                echo '</div>';
                echo '<img src="' . $player['image'] . '">';
                echo '<div class="stats">';
                echo '<p class="position">' . 'Position: ' . $player['position'] . ' </p>';
                echo '<p class="DOB">' . 'DOB: ' . $player['DOB'] . ' </p>';
                echo '<p class="height">' . 'Height: ' . $player['height'] . ' m' . ' </p>';
                echo '<p class="weight">' . 'Weight: ' . $player['weight'] . ' kg' . ' </p>';
                echo '</div>';
                echo '</div>';
            }

            ?>

        </section>

    </body>

</html>


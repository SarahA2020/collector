<?php

include('includes/functions.php');

$db = new PDO('mysql:host=db;dbname=player-cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `player_first_name`, `player_last_name`, `club`, `image`, `position`, `DOB`, `height`, `weight` FROM `card_details`;');

$query->execute();

$player_cards = $query->fetchAll();

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
        <nav>
            <a class="add" href="add_card.php">Add new player card!</a>
        </nav>

        <h1>AFL Player Cards Collection</h1>
        <p class="intro">Welcome to my awesome collection of Australian Rules Football player cards. Each card displays the photo and stats of the some of the best players in the league.</p>

        <section class="grid_container">

            <?php

            foreach($player_cards as $existing_player_card) {
                echo display_card($existing_player_card);
            }

            ?>

        </section>

    </body>

</html>


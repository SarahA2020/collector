
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

        <nav class="return">
            <a href="index.php">Return to collection</a>
        </nav>

        <h1>Add Your Own Card!</h1>

        <p class="intro">Add your own AFL player card below by filling in the form and hitting submit:</p>

        <div class="form_container">
            <form action="card_added.php" method="POST">
                <div class="pair">
                    <label for="player_first_name">Player's First Name</label>
                    <input type="text" name="player_first_name" placeholder="First name">
                </div>
                <div class="pair">
                    <label for="player_last_name">Player's Last Name</label>
                    <input type="text" name="player_last_name" placeholder="Last name">
                </div>
                <div class="pair">
                    <label for="club">Which club do they play for?</label>
                    <input type="text" name="club" placeholder="Team">
                </div>
                <div class="pair">
                    <label for="image">Upload their photo</label>
                    <input type="text" name="image" placeholder="url or file path">
                </div>
                <div class="pair">
                    <label for="position">What position do they play?</label>
                    <input type="text" name="position" placeholder="Midfield, Forward, Defender, etc.">
                </div>
                <div class="pair">
                    <label for="DOB">What is their date of birth?</label>
                    <input type="text" name="DOB" placeholder="e.g. 1994-11-28">
                </div>
                <div class="pair">
                    <label for="height">What is their height?</label>
                    <input type="text" name="height" placeholder="in meters">
                </div>
                <div class="pair">
                    <label for="weight">What is their weight?</label>
                    <input type="text" name="weight" placeholder="in kg">
                </div>
                    <input type="submit" class="click_me">
            </form>
        </div>
    </body>
</html>







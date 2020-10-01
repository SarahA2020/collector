<?php

// array below refers to the input datatype and string refers to the output (return) datatype. With the malformed test we are testing the input datatype so all I have to do in the malformed test function in the tests/index file is pass the wrong datatype to $input

function display_card(array $player): string  {
    // This is for my failure test. Here I am saying that if any one of the keys(fields) in my database fails for some reason (like someone has changed the name) and the corresponding value cannot be output (in other words it is empty) then return an empty string (i.e. return nothing), otherwise just return the actual value.

    if (
        empty($player['club']) &&
        empty($player['player_first_name']) &&
        empty($player['player_last_name']) &&
        empty($player['image']) &&
        empty($player['position']) &&
        empty($player['DOB']) &&
        empty($player['height']) &&
        empty($player['weight'])
    ) {
        return '';
    }

    return '<div class="card ' . str_replace(' ', '_',$player['club']) . '">' .
            '<div class="card_top">' .
            '<h2 class="player_name">' . $player['player_first_name'] . ' ' . $player['player_last_name'] . '</h2>' .
            '<h3 class="club">' . $player['club'] . ' </h3>' .
            '</div>' .
            '<img src="' . $player['image'] . '">' .
            '<div class="stats">' .
            '<p class="position">' . 'Position: ' . $player['position'] . ' </p>' .
            '<p class="DOB">' . 'DOB: ' . $player['DOB'] . ' </p>' .
            '<p class="height">' . 'Height: ' . $player['height'] . ' m' . ' </p>' .
            '<p class="weight">' . 'Weight: ' . $player['weight'] . ' kg' . ' </p>' .
            '</div>' .
            '</div>';
}


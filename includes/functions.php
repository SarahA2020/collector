<?php

function display_card($player) {
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

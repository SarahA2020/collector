<?php

include('includes/functions.php');

$db = new PDO('mysql:host=db;dbname=AFL Player Cards', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('INSERT INTO `card_details` (`player_first_name`, `player_last_name`, `club`, `image`, `position`, `DOB`, `height`, `weight`) VALUES (:player_first_name, :player_last_name, :club, :image, :position, :DOB, :height, :weight)');

$query->execute(['player_first_name' => $_POST['player_first_name'], 'player_last_name' => $_POST['player_last_name'], 'club' => $_POST['club'], 'image' => $_POST['image'], 'position' => $_POST['position'], 'DOB' => $_POST['DOB'], 'height' => $_POST['height'], 'weight' => $_POST['weight']]);

$added_player_card = $query->fetchAll();

header("Location: index.php");
exit;




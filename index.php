<?php 

require 'data/hotels.php';
// var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($hotels as $hotel) : ?>
        <li><?= $hotel['name'] ?></li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>
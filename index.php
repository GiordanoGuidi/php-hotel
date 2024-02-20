<?php 
require 'data/hotels.php';
//RECUPERO IL VALORE DELL'INPUT CHECK-BOX
$parking= $_GET['parking'] ?? '';
var_dump($parking);

//RECUPERO IL VALORE DELLA SELECT
$vote = $_GET['vote'] ?? '';
var_dump($vote);

//ARRAY DI HOTEL CON IL PARCHEGGIO
$parking_hotels = array_filter($hotels, function ($hotel) {
    return ($hotel['parking'] == true);
});

//ARRAY DI HOTEL IN BASE AL VOTO
$rated_hotels = array_filter($hotels,function ($hotel){
    global $vote;
    return ($hotel['vote'] == $vote);
});
var_dump($rated_hotels);

//ARRAY DI HOTEL FILTRATI PER VOTO E PARCHEGGIO
$rated_parking_hotels= array_filter($rated_hotels, function ($hotel){
    return ($hotel['parking']== true);
});
var_dump($rated_parking_hotels);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="mt-5 text-center">Lista degli Hotel</h1>
        </header>
        <main>
            <!--FORM-->
            <form actiom="" method="GET">
                <select class="form-select mt-4 mb-4" aria-label="Default select example" name="vote">
                    <option value="">Filtra in base al voto</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="parking">
                    <label class="form-check-label">Parking</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <!--TABLE-->
            <table class="table mt-5 text-center">
              <thead>
                <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Parcking</th>
                  <th scope="col">Vote</th>
                  <th scope="col">Distance to Center</th>
                </tr>
              </thead>
              <tbody>
                <?php if($parking && !$vote): ?>
                    <?php foreach($parking_hotels as $hotel) : ?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>     
                        </tr>
                    <?php endforeach ?>
                <?php elseif($vote && !$parking):?>
                    <?php foreach($rated_hotels as $hotel): ?>    
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>     
                        </tr>
                        <?php endforeach ?>
                <?php elseif($vote && $parking): ?>
                    <?php foreach($rated_parking_hotels as $hotel):?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>     
                        </tr>
                    <?php endforeach?>        
                <?php else: ?>
                    <?php foreach($hotels as $hotel): ?>
                        <tr>
                            <td><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td><?= $hotel['vote'] ?></td>
                            <td><?= $hotel['distance_to_center'] ?></td>     
                        </tr>
                    <?php endforeach?>
                <?php endif;?>
              </tbody>
            </table>
        </main>
    </div>
</body>
</html>
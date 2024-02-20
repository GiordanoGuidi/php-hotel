<?php 

require 'data/hotels.php';
// var_dump($hotels);

$parking= $_GET['parking'] ?? '';
var_dump($parking);
// var_dump($hotels);

//ARRAY DI HOTEL CON IL PARCHEGGIO
$parking_hotel= array_filter($hotels, function ($hotel) {
    return ($hotel['parking'] == true);
});
var_dump($parking_hotel);


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
                <select class="form-select mt-4 mb-4" aria-label="Default select example">
                    <option selected>Filtra in base al voto</option>
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
                <!-- <?php if($parking) ?>
                  <?php foreach($hotels as $hotel){ ?> -->
                <tr>
                  <td><?= $hotel['name'] ?></td>
                  <td><?= $hotel['description'] ?></td>
                  <td><?= $hotel['parking'] ?></td>
                  <td><?= $hotel['vote'] ?></td>
                  <td><?= $hotel['distance_to_center'] ?></td>     
                </tr>
                <?php }?>
              </tbody>
            </table>
        </main>
    </div>
</body>
</html>
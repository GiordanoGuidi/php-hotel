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
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 text-center">Lista degli Hotel</h1>
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
            <?php foreach($hotels as $hotel){ ?>
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
    </div>
    
</body>
</html>
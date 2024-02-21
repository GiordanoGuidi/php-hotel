<?php 
require 'data/hotels.php';
//RECUPERO IL VALORE DELL'INPUT CHECK-BOX
$parking= $_GET['parking'] ?? '';

//RECUPERO IL VALORE DELLA SELECT
$vote = $_GET['vote'] ?? '';

//ARRAY DI HOTEL CON IL PARCHEGGIO
$parking_hotels = array_filter($hotels, function ($hotel) {
    return ($hotel['parking'] == true);
});

//ARRAY DI HOTEL IN BASE AL VOTO
$rated_hotels = array_filter($hotels,function ($hotel){
    global $vote;
    return ($hotel['vote'] >= $vote);
});

//ARRAY DI HOTEL FILTRATI PER VOTO E PARCHEGGIO
$rated_parking_hotels= array_filter($rated_hotels, function ($hotel){
    return ($hotel['parking']== true);
});

//CONDIZIONE PER LA QUALE VIENE SCELTO L'ARRAY SUL QUALE ITERARE
if($parking){
    $hotels = $parking_hotels;
    var_dump($hotels);
}elseif($vote){
    $hotels= $rated_hotels;
}elseif($vote && $parking){
    $hotels = $ $rated_parking_hotels;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
                <!--VENGONO FILTRATI HOTEL CON PARCHEGGIO-->
                    <?php foreach($hotels as $hotel) : ?>
                       <?php include 'templates/tbody.php' ?>
                    <?php endforeach ?>
              </tbody>
            </table>
        </main>
    </div>
</body>
</html>



<style>

</style>
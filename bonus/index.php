<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <h1 class="text-center">PHP Hotel</h1>
    <form action="#" method="GET">
       <label for="parking">Filtra gli hotel con parcheggio:</label>
       <input type="text" name="parking" id="parking" placeholder="Inserisci 'si' o 'no'">
       <button type="submit">Cerca</button>
    </form>
    <?php if (count($hotels_filtered) > 0) { ?>
    <ul>
      <?php foreach ($hotels_filtered as $hotel) {
        if ($hotel['parking']) { ?>
          <li><?php echo $hotel['name']; ?></li>
        <?php }
      } ?>
    </ul>
  <?php } else { ?>
    <p>Nessun hotel trovato.</p>
  <?php } ?>

<?php 

$hotels = [

 [
     'name' => 'Hotel Belvedere',
     'description' => 'Hotel Belvedere Description',
     'parking' => 'true',
     'rating' =>  4,
     'distance_to_the_center' =>  10.4
 ],
 [
     'name' => 'Hotel Futuro',
     'description' => 'Hotel Futuro Description',
     'parking' => 'true',
     'rating' =>  2,
     'distance_to_the_center' =>  2
 ],
 [
     'name' => 'Hotel Rivamare',
     'description' => 'Hotel Rivamare Description',
     'parking' => 'false',
     'rating' =>  1,
     'distance_to_the_center' =>  1
 ],
 [
     'name' => 'Hotel Bellavista',
     'description' => 'Hotel Bellavista Description',
     'parking' => 'false',
     'rating' =>  5,
     'distance_to_the_center' =>  5.5
 ],
 [
     'name' => 'Hotel Milano',
     'description' => 'Hotel Milano Description',
     'parking' => 'true',
     'rating' =>  2,
     'distance_to_the_center' =>  50
 ],
];

$parking_filter = isset($_GET['parking']) ? $_GET['parking'] : '';
$hotels_filtered = array_filter($hotels, function($hotel) use ($parking_filter) {
  if ($parking_filter != '') {
    return ($hotel['parking'] && $parking_filter == 'si') || (!$hotel['parking'] && $parking_filter == 'no');
  }
  return true;
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <h1>PHP Hotel</h1>
    <?php 

$hotels = [

 [
     'name' => 'Hotel Belvedere',
     'description' => 'Hotel Belvedere Description',
     'parking' => 'true',
     'rating' =>  4,
     'distance_from_the_center' =>  10.4
 ],
 [
     'name' => 'Hotel Futuro',
     'description' => 'Hotel Futuro Description',
     'parking' => 'true',
     'rating' =>  2,
     'distance_from_the_center' =>  2
 ],
 [
     'name' => 'Hotel Rivamare',
     'description' => 'Hotel Rivamare Description',
     'parking' => 'false',
     'rating' =>  1,
     'distance_from_the_center' =>  1
 ],
 [
     'name' => 'Hotel Bellavista',
     'description' => 'Hotel Bellavista Description',
     'parking' => 'false',
     'rating' =>  5,
     'distance_from_the_center' =>  5.5
 ],
 [
     'name' => 'Hotel Milano',
     'description' => 'Hotel Milano Description',
     'parking' => 'true',
     'rating' =>  2,
     'distance_from_the_center' =>  50
 ],
];

// Ciclo per stampare tutti gli hotel
foreach ($hotels as $hotel) {
  echo "<h2>{$hotel['name']}</h2>";
  echo "<p>{$hotel['description']}</p>";
  echo "<p>City: {$hotel['parking']}</p>";
  echo "<p>Rating: {$hotel['rating']}</p>";
  echo "<p>Distance From The Center: {$hotel['distance_from_the_center']}</p>";
}

?>
</body>
</html>
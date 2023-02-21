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
    <h1>PHP Hotel</h1>
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


// Tabella Bootstrap per mostrare gli hotels
echo "<table class='table'>";
echo "<thead><tr><th>Name</th><th>Description</th><th>Parking</th><th>Rating</th><th>Distance to The Center</th></tr></thead>";
echo "<tbody>";
foreach ($hotels as $hotel) {
    echo "<tr>";
    echo "<td>{$hotel['name']}</td>";
    echo "<td>{$hotel['description']}</td>";
    echo "<td>{$hotel['parking']}</td>";
    echo "<td>{$hotel['rating']}</td>";
    echo "<td>{$hotel['distance_to_the_center']}</td>";
    echo "</tr>";
}
echo "</tbody></table>";
?>

<!-- Cards Bootstrap per mostrare gli hotels -->
<div class="card-deck d-flex  justify-content-around">
    <?php foreach ($hotels as $hotel): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $hotel['name']; ?></h5>
                <p class="card-text"><?php echo $hotel['description']; ?></p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Parking:</strong> <?php echo $hotel['parking']; ?></li>
                    <li class="list-group-item"><strong>Rating:</strong> <?php echo $hotel['rating']; ?></li>
                </ul>
                <a href="#" class="btn btn-primary mt-3 ">Book now</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


</body>
</html>
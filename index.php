<?php

require __DIR__ . '/partials/data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
    <ul>
        <?php foreach ($hotels as $hotel) : ?>
        <li>
            <?= "{$hotel['name']} {$hotel['description']} {$hotel['parking']} {$hotel['vote']} {$hotel['distance_to_center']}" ?> 
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
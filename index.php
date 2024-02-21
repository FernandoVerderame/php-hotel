<?php

// Import hotels data
require __DIR__ . '/partials/data.php';

// Data variable
$data = $_GET;

// Parking filter
if (isset($data['parking']) && !empty($data['parking'])) {
    $filter_parking = [];

    foreach ($hotels as $hotel) {
        $park = $hotel['parking'] ? 'si' : 'no';
        if ($park === $data['parking']) {
            $filter_parking[] = $hotel;
        }
    }
    $hotels = $filter_parking;
}

// Vote filter
if (isset($data['vote']) && !empty($data['vote'])) {
    $vote = $data['vote'];
    $hotels = array_filter($hotels, fn($hotel) => $hotel['vote'] >= $vote);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
        integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
        crossorigin='anonymous' />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotels</title>
</head>

<body>

    <!-- Hotels section -->
    <section id="hotels-table">
        <div class="container">

            <!-- Header -->
            <header class="d-flex justify-content-between align-items-center">
                <h1 class="my-5">Hotels</h1>

                <!-- Filters -->
                <?php include __DIR__ . '/template/filter.php' ?>

            </header>

            <!-- Main -->
            <main>

                <!-- Hotels table -->
                <?php include __DIR__ . '/template/table.php' ?>

            </main>
        </div>
    </section>
</body>

</html>
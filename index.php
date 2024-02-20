<?php

require __DIR__ . '/partials/data.php';

if (isset($_GET['parking']) && !empty($_GET['parking'])) {
    $filter_parking = [];

    foreach ($hotels as $hotel) {
        $park = $hotel['parking'] ? 'si' : 'no';
        if ($park === $_GET['parking']) {
            $filter_parking[] = $hotel;
        }
    }
    $hotels = $filter_parking;
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
    <section id="hotels-table">
        <div class="container">
            <header class="d-flex justify-content-between align-items-center">
                <h1 class="my-5">Hotels</h1>
                <form action="" method="GET">
                    <select name="parking" id="parking">
                        <option value="">Scegli</option>
                        <option value="si">CON Parcheggio</option>
                        <option value="no">SENZA Parcheggio</option>
                    </select>
                    <button>Filtra</button>
                </form>
            </header>
            <table class="table table-striped border border-black">
                <thead class="text-center">
                    <tr>
                        <th class="text-start" scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php foreach ($hotels as $hotel): ?>
                        <tr>
                            <td class="text-start">
                                <?= $hotel['name'] ?>
                            </td>
                            <td>
                                <?= $hotel['description'] ?>
                            </td>
                            <td>
                                <?= $parking_icon = $hotel['parking'] ? '<i class="fa-solid fa-circle-check"></i>' : '<i class="fa-solid fa-circle-xmark"></i>';
                                ?>
                            </td>
                            <td>
                                <?= $hotel['vote'] ?>
                            </td>
                            <td>
                                <?= $hotel['distance_to_center'] ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>
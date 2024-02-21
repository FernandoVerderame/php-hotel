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
                    <?= $hotel['vote'] . '/5' ?>
                </td>
                <td>
                    <?= $hotel['distance_to_center'] . ' km' ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
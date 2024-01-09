<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
$filter_parking = $_GET['parking'] ?? 'reset';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHPHotel</title>
</head>

<body class="bg-primary-subtle">
    <div class="container text-center py-5">
        <!-- titolo -->
        <h1 class="mb-5">Hotels</h1>

        <!-- form -->
        <form action="index.php" method="GET" class="mb-4">
            <!-- selezione parcheggio -->
            <h3>Parcheggio</h3>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parking" id="inlineRadio1" value="yes">
                <label class="form-check-label" for="inlineRadio1">Si</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parking" id="inlineRadio2" value="no">
                <label class="form-check-label" for="inlineRadio2">No</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parking" id="inlineRadio2" value="reset">
                <label class="form-check-label" for="inlineRadio2">Reset</label>
            </div>

            <!-- bottone -->
            <button class="btn btn-success">Invio</button>

        </form>

        <!-- tabella -->
        <table class="table">
            <thead>
                <tr>
                    <?php
                    foreach ($hotels[0] as $key => $hotel) {
                        echo '<th scope="col">' . $key . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) {
                    if ($filter_parking === 'reset') {
                        echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . ' km</td>';
                        echo '</tr>';
                    } elseif ($filter_parking === 'yes' && $hotel['parking'] === true) {
                        echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . ' km</td>';
                        echo '</tr>';
                    } elseif ($filter_parking === 'no' && $hotel['parking'] === false) {
                        echo '<tr>';
                        echo '<td>' . $hotel['name'] . '</td>';
                        echo '<td>' . $hotel['description'] . '</td>';
                        echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                        echo '<td>' . $hotel['vote'] . '</td>';
                        echo '<td>' . $hotel['distance_to_center'] . ' km</td>';
                        echo '</tr>';
                    }
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
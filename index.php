<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>


</head>

<body>
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
    ?>

    <main>

        <form action="./filter.php" method="GET">
            <input type="text" name="parkings">
            <button type="submit">invia</button>
        </form>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table  table-dark table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Parking</th>
                                <th scope="col">Vote</th>
                                <th scope="col">Distance to center</th>
                            </tr>
                        </thead>

                        <tbody>




                            <?php


                            foreach ($hotels as $hotel) {
                                $parkingYoN = '';
                                if ($hotel['parking'] == 1) {
                                    $parkingYoN = 'yes';
                                } else {
                                    $parkingYoN = 'no';
                                };

                                echo "
                                <tr>
                                <td> {$hotel['name']} </td>
                                <td> {$hotel['description']} </td>
                                <td> {$parkingYoN}</td>
                                <td> {$hotel['vote']} / 5 </td>
                                <td> {$hotel['distance_to_center']} Km </td>
                                </tr>";
                            }



                            ?>



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>


</body>

</html>
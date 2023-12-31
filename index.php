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

    //come stampare in pagina i singoli valori di un array associativa
    // var_dump($hotels[1]['parking']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CDN -->
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

        <title>Migliori Hotel Disponibili</title>
    </head>
    <body>
        <div class="container">
                <div class='d-flex flex-wrap justify-content-center'>
                    <h3 class="mt-4">Hotel Disponibili</h3>
                    <table class='table text-capitalize'>
                        <thead>
                            <tr class="table-danger">
                                <th class='col'>name</th>
                                <th class='col'>description</th>
                                <th class='col'>parking</th>
                                <th class='col'>vote</th>
                                <th class='col'>distance of center</th>
                            </tr>
                        </thead>
                        <!-- operatore ternario quale alternativa al costrutto condizionale if/else  -->
                        <!--1) la condizione da verificare , 2)il valore restituito se la condizione è vera e 
                        3)il valore restituito se la condizione è falsa -->
                        <?php foreach($hotels as $hotel) { 
                            $park = $hotel['parking'] ? 'si':'no';
                        ?>
                        <!-- costrutto condizionale alternativo 
                             if($hotel)
                        -->
                        <tr>
                        <!-- l'istruzione if else ha una sua forma contratta rappresentata dal simbolo ? -->    
                            <td><?php echo $hotel['name']; ?></td>
                            <td><?php echo $hotel['description']; ?></td>
                            <td><?php echo $park; ?></td>
                            <td><?php echo $hotel['vote']; ?></td>
                            <td><?php echo $hotel['distance_to_center']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>        
    </body>
</html>
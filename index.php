<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    $mahasigma = ["fathon", "goku", "Mujahid", "rojak", "alif"];

    $fathon = array(
        "id" => "ftn",
        "name" => "Fathon",
        "age" => 20,
        "asal" => "Los Angeles",
        "color" => "red"
    );

    $goku = [
        "id" => "gok",
        "name" => "goku",
        "age" => 50,
        "asal" => "Cikarang",
        "color" => "white"
    ];
    $Mujahid = [
        "id" => "muj",
        "name" => "Mujahid",
        "age" => 19,
        "asal" => "Banten",
        "color" => "yellow"
    ];
    $rojak = [
        "id" => "roj",
        "name" => "rojak",
        "age" => 19,
        "asal" => "Pontianak",
        "color" => "blue"
    ];
    $alif = [
        "id" => "ali",
        "name" => "alif",
        "age" => 175,
        "asal" => "Bekasi",
        "color" => "black"
    ];
    ?>

    <div class="container-fluid">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Asal</th>
                    <th scope="col">Fav Color</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo "<tr>
                <th scope='row'>" . $fathon["id"] . "</th>
                <td>" . $fathon["name"] . "</td>
                <td>" . $fathon["age"] . "</td>
                <td>" . $fathon["asal"] . "</td>
                <td>" . $fathon["color"] . "</td>
                </tr>";

                echo "<tr>
                <th scope='row'>" . $goku["id"] . "</th>
                <td>" . $goku["name"] . "</td>
                <td>" . $goku["age"] . "</td>
                <td>" . $goku["asal"] . "</td>
                <td>" . $goku["color"] . "</td>
                </tr>";

                echo "<tr>
                <th scope='row'>" . $Mujahid["id"] . "</th>
                <td>" . $Mujahid["name"] . "</td>
                <td>" . $Mujahid["age"] . "</td>
                <td>" . $Mujahid["asal"] . "</td>
                <td>" . $Mujahid["color"] . "</td>
                </tr>";

                echo "<tr>
                <th scope='row'>" . $rojak["id"] . "</th>
                <td>" . $rojak["name"] . "</td>
                <td>" . $rojak["age"] . "</td>
                <td>" . $rojak["asal"] . "</td>
                <td>" . $rojak["color"] . "</td>
                </tr>";

                echo "<tr>
                <th scope='row'>" . $alif["id"] . "</th>
                <td>" . $alif["name"] . "</td>
                <td>" . $alif["age"] . "</td>
                <td>" . $alif["asal"] . "</td>
                <td>" . $alif["color"] . "</td>
                </tr>";
                ?>
            </tbody>
        </table>
    </div>

    <div class="container-xl">
        <div class="row">
            <?php 
            echo "
            <div class='col mt-1'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>ID: ".$fathon['id']."</li>
                        <li class='list-group-item'>Name: " . $fathon['name'] . "</li>
                        <li class='list-group-item'>Age: " . $fathon['age'] . "</li>
                        <li class='list-group-item'>Asal: " . $fathon['asal'] . "</li>
                        <li class='list-group-item'>Color: " . $fathon['color'] . "</li>
                    </ul>
                </div>
            </div>
            ";
            
            echo "
            <div class='col mt-1'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>ID: " . $goku['id'] . "</li>
                        <li class='list-group-item'>Name: " . $goku['name'] . "</li>
                        <li class='list-group-item'>Age: " . $goku['age'] . "</li>
                        <li class='list-group-item'>Asal: " . $goku['asal'] . "</li>
                        <li class='list-group-item'>Color: " . $goku['color'] . "</li>
                    </ul>
                </div>
            </div>
            ";
            echo "
            <div class='col mt-1'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>ID: " . $Mujahid['id'] . "</li>
                        <li class='list-group-item'>Name: " . $Mujahid['name'] . "</li>
                        <li class='list-group-item'>Age: " . $Mujahid['age'] . "</li>
                        <li class='list-group-item'>Asal: " . $Mujahid['asal'] . "</li>
                        <li class='list-group-item'>Color: " . $Mujahid['color'] . "</li>
                    </ul>
                </div>
            </div>
            ";
            echo "
            <div class='col mt-1'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>ID: " . $rojak['id'] . "</li>
                        <li class='list-group-item'>Name: " . $rojak['name'] . "</li>
                        <li class='list-group-item'>Age: " . $rojak['age'] . "</li>
                        <li class='list-group-item'>Asal: " . $rojak['asal'] . "</li>
                        <li class='list-group-item'>Color: " . $rojak['color'] . "</li>
                    </ul>
                </div>
            </div>
            ";
            echo "
            <div class='col-3 mt-1'>
                <div class='card' style='width: 18rem;'>
                    <ul class='list-group list-group-flush'>
                        <li class='list-group-item'>ID: " . $alif['id'] . "</li>
                        <li class='list-group-item'>Name: " . $alif['name'] . "</li>
                        <li class='list-group-item'>Age: " . $alif['age'] . "</li>
                        <li class='list-group-item'>Asal: " . $alif['asal'] . "</li>
                        <li class='list-group-item'>Color: " . $alif['color'] . "</li>
                    </ul>
                </div>
            </div>
            ";
            ?>
        </div>
    </div>
</body>

</html>
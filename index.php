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
                        <li class='list-group-item'>ID: " . $fathon['id'] . "</li>
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
    <br>
    <!-- satu -->
    <div class="container">
        <h1>ARITMATHIC OPERATION</h1>
        <?php
        $result = 0;

        $tinggi = 173;

        $result = ($tinggi - 100) - (($tinggi - 100) * 0.1);

        echo "Berat badan idealnya: $result"
            ?>
    </div>

    <!-- dua -->
    <div class="container">
        <?php
        $jumlah = 0;
        $akhir = 0;

        $buah = 5000;
        $sayur = 100000;
        $gula = 15000;
        $diskon = 0.15;

        $jumlah = ($buah + $sayur + $gula) * $diskon;
        $akhir = ($buah + $sayur + $gula) - $jumlah;

        echo "jumlah:Rp.$akhir ";
        ?>
    </div>

    <!-- ketiga -->
    <div class="container mt-4">
        <form method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" required>
                <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female" required>
                <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="mb-3">
                <label for="TB" class="form-label">Tinggi Badan (cm)</label>
                <input type="number" class="form-control" name="tb" id="TB" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $tb = $_POST['tb'];
            $gender = $_POST['gender'];


            if ($gender == "male") {
                $broca_ideal = ($tb - 100) - (0.10 * ($tb - 100));
            } elseif ($gender == "female") {
                $broca_ideal = ($tb - 100) - (0.15 * ($tb - 100));
            }


            echo "<div class='mt-4 alert alert-info'>";
            echo "<h4>Hasil Perhitungan Berat Badan Ideal</h4>";
            echo "Nama: $nama<br>";
            echo "Tinggi Badan: $tb cm<br>";
            echo "Berat Badan Ideal: " . number_format($broca_ideal, 2) . " kg<br>";
            echo "</div>";
        }
        ?>
    </div>

    <!-- empat -->
    <div class="container mt-5">
        <h2 class="mb-4">Perhitungan Diskon</h2>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="buah" class="form-label">Harga Buah</label>
                <input type="number" class="form-control" id="buah" name="buah" placeholder="Masukkan harga buah"
                    required>
            </div>
            <div class="mb-3">
                <label for="sayur" class="form-label">Harga Sayur</label>
                <input type="number" class="form-control" id="sayur" name="sayur" placeholder="Masukkan harga sayur"
                    required>
            </div>
            <div class="mb-3">
                <label for="gula" class="form-label">Harga Gula</label>
                <input type="number" class="form-control" id="gula" name="gula" placeholder="Masukkan harga gula"
                    required>
            </div>
            <div class="mb-3">
                <label for="diskon" class="form-label">Diskon</label>
                <input type="text" class="form-control" id="diskon" value="15%" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $buah = isset($_POST['buah']) ? $_POST['buah'] : 0;
            $sayur = isset($_POST['sayur']) ? $_POST['sayur'] : 0;
            $gula = isset($_POST['gula']) ? $_POST['gula'] : 0;
            $diskon = 0.15;

            $jumlah_diskon = ($buah + $sayur + $gula) * $diskon;
            $total_akhir = ($buah + $sayur + $gula) - $jumlah_diskon;

            echo "<div class='alert alert-info mt-4'>Total setelah diskon: Rp. " . number_format($total_akhir, 2, ',', '.') . "</div>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .card{
            max-width: 550px;
            margin: 0 auto;
        }


        .card-img-top {
            aspect-ratio: 16 / 7;
            object-fit: cover;
            width: 100%;
            height: auto;
        }
    </style>
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

    <!-- --------------------------------------------------------------- -->

    <!-- ARITMATHIC -->
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

    <!-- ---------------------------------------------------------- -->

    <!-- TERNARY -->
    <div class="container mt-5">
        <h1>TERNARY OPERATION TEST</h1>
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h3>Form Penilaian</h3>
            </div>
            <div class="card-body">
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Masukkan Kelas"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="nilai_tugas" class="form-label">Nilai Tugas</label>
                        <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" min="0" max="100"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="nilai_projek" class="form-label">Nilai Projek</label>
                        <input type="number" class="form-control" id="nilai_projek" name="nilai_projek" min="0"
                            max="100" required>
                    </div>

                    <div class="mb-3">
                        <label for="nilai_mt" class="form-label">Nilai MT</label>
                        <input type="number" class="form-control" id="nilai_mt" name="nilai_mt" min="0" max="100"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="absensi" class="form-label">Absensi (%)</label>
                        <input type="number" class="form-control" id="absensi" name="absensi" min="0" max="100"
                            required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nilai_tugas = $_POST['nilai_tugas'];
                $nilai_projek = $_POST['nilai_projek'];
                $nilai_mt = $_POST['nilai_mt'];
                $absensi = $_POST['absensi'];

                $nilai_akhir = ($nilai_tugas * 0.3) + ($nilai_projek * 0.5) + ($nilai_mt * 0.2);

                $status = ($nilai_akhir >= 75 && $absensi >= 75)
                    ? 'Lulus' : 'Tidak Lulus';

                echo "<div class='alert alert-info mt-3 text-center'>
                            Nilai Akhir: <strong>$nilai_akhir</strong><br>
                            Nilai absensi: <strong>$absensi</strong><br>
                            Status: <strong>$status</strong>
                          </div>";
            }
            ?>
        </div>
    </div>

    <!-- For loop -->
    <div class="container mt-4">
        <div>
            <h1>For and For Each</h1>
        </div>
        <div class="container">
            <div>
                <h3>Soal 1.</h3>
            </div>
            <?php
            $sum = 0;

            for ($i = 1; $i <= 19; $i += 2) {
                echo "$i ";
                $sum += $i;
            }

            echo "<br>Jumlah total: $sum";
            ?>
        </div>
        <div class="container">
            <div>
                <h3>Soal 2</h3>
            </div>
            <?php
            for ($i = 1; $i * $i <= 100; $i++) {
                $pangkatDua = $i * $i;
                echo "$pangkatDua ";
            }
            ?>

        </div>
        <div class="container">
            <div>
                <h3>Soal 3</h3>
            </div>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if ($i % 3 == 0 && $i % 5 == 0) {
                    echo "flash buzz, ";
                } else if ($i % 3 == 0) {
                    echo "buzz, ";
                } else if ($i % 5 == 0) {
                    echo "flash, ";
                } else {
                    echo $i . ", ";
                }
            }
            ?>
        </div>
        <div class="container mt-4">
            <div class="row">
                <div>
                    <h3>Soal 4 </h3>
                </div>
                <?php
                $produk = [
                    ["nama" => "Sate", "deskripsi" => "Sate maranggi mantap", "harga" => 15000, "gambar" => "https://th.bing.com/th/id/OIP.cvCltr4n8jvuj1NIr_1fawHaDt?w=339&h=174&c=7&r=0&o=5&dpr=1.1&pid=1.7"],
                    ["nama" => "Mio karbu", "deskripsi" => "Power oke, bensin tidak", "harga" => 5000000, "gambar" => "https://th.bing.com/th/id/OIP.VxyHYaZuw8NLX8TiXQwdTwHaE6?w=260&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7"],
                    ["nama" => "Ortusight Hyperblast evo", "deskripsi" => "Mantap untuk jarak hingga jarak HM", "harga" => 579000, "gambar" => "https://th.bing.com/th/id/OIP.t6hoKwWinVzs3FbZtaQA8QHaHa?w=200&h=200&c=7&r=0&o=5&dpr=1.1&pid=1.7"],
                    ["nama" => "Nike Alphafly ", "deskripsi" => "Mantap ini bisa buat FM dan meningkatkan kecepatan(plat karbon)", "harga" => 4429999, "gambar" => "https://th.bing.com/th/id/OIP.o2d5MplC5LcGDz2o4jRbeAHaE6?w=249&h=180&c=7&r=0&o=5&dpr=1.1&pid=1.7"],
                    ["nama" => "TSUNAMI SNM300", "deskripsi" => "Mantap dan keren aja sih", "harga" => 6683723, "gambar" => "https://media.karousell.com/media/photos/products/2022/9/5/tsunami_snm300_2022_fixie_bike_1662369204_a37a785f_progressive.jpg"],
                    ["nama" => "Huawei GT4", "deskripsi" => "Jam all arounder, fitur lengkap, baterai lebih tahan lama daripada hubungan anak gen z", "harga" => 4631975, "gambar" => "https://th.bing.com/th/id/OIP.1gCMVF1ZB25-PvIIcNKpOQHaH0?rs=1&pid=ImgDetMain"]
                ];

                foreach ($produk as $p) {
                    echo "
                <div class='col-md-4 mb-3'>
                    <div class='card h-100'>
                        <img src='{$p['gambar']}' class='card-img-top' alt='Gambar Produk'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$p['nama']}</h5>
                            <p class='card-text'>{$p['deskripsi']}</p>
                            <p class='card-text'><strong>Harga: </strong>Rp " . number_format($p['harga'], 0, ',', '.') . "</p>
                        </div>
                    </div>
                </div>";
                }
                ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
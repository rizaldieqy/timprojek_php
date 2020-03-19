<?php

    $siswa = [
        [
            "Nama" => "Rizal",
            "Jenis_Kelamin" => "Laki-laki",
            "No_HP" => "8123456",
            "Email" => "rizal@gmail.com",
            "Pendidikan_Terakhir" => "S1",
            "Alamat" => "Cipondoh",
            "img" => "t3.jpg"
        ],
        [
            "Nama" => "Wachid",
            "Jenis_Kelamin" => "Laki-laki",
            "No_HP" => "8123457",
            "Email" => "wachid@gmail.com",
            "Pendidikan_Terakhir" => "S1",
            "Alamat" => "Cengkareng",
            "img" => "t2.jpg"
        ],
        [
            "Nama" => "Fadjar",
            "Jenis_Kelamin" => "Laki-laki",
            "No_HP" => "8123458",
            "Email" => "fadjar@gmail.com",
            "Pendidikan_Terakhir" => "SMK",
            "Alamat" => "Pademangan",
            "img" => "t1.jpg"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <style>

        body {
            font-family: 'Patua One', cursive;
            background-color: lightslategray;
        }

        #bg {
            background-image: url(img/bg1.jpg);
            background-size: cover;
            background-attachment: fixed;
            height : 300px;
            color : ghostwhite;
        }

        #daftar {
            margin-top : 100px;
        }

        #isi {
            margin-top : 200px;
        }

        #foot {
            margin-top : 50px;
            background-color: black;
        }
    </style>
</head>
<body>
    
    <div class="container-fluid" id="bg">
        <div class="row">
            <div class="col-sm-12">
                <div class="head text-center">
                    <h2 id="daftar">DAFTAR SISWA EDUTECH</h2>
                    <h3>BATCH 4</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" id="isi">
            <div class="col-sm-4">
                <table class="table table-bordered table-dark">
                    <tbody>
                        <?php foreach($siswa as $tampilsiswa) : ?>
                            <tr>
                                <td class="text-center">Nama Siswa : <a href="isisiswabelajar.php?Nama=<?php echo $tampilsiswa["Nama"]; ?>&Jenis_Kelamin=<?= $tampilsiswa["Jenis_Kelamin"] ?>&No_HP=<?= $tampilsiswa["No_HP"] ?>&Email=<?= $tampilsiswa["Email"] ?>&Pendidikan_Terakhir=<?= $tampilsiswa["Pendidikan_Terakhir"] ?>&Alamat=<?= $tampilsiswa["Alamat"] ?>&img=<?= $tampilsiswa["img"] ?>"><?= $tampilsiswa["Nama"] ?></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row text-center" id="foot">
            <div class="col-sm-12">
                <br><p>Copyright &copy; Batch4 2020</p>
            </div>
        </div>
    </div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
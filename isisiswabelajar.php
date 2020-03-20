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
    ],
    [
        "Nama" => "Riyan",
        "Jenis_Kelamin" => "Laki-laki",
        "No_HP" => "8123458",
        "Email" => "riyan@gmail.com",
        "Pendidikan_Terakhir" => "STM",
        "Alamat" => "Srengseng",
        "img" => "t1.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data siswa belajar </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nama</th>
            <th scope="col">Jenis_Kelamin</th>
            <th scope="col">No_HP</th>
            <th scope="col">Email</th>
            <th scope="col">Pendidikan_Terakhir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Gambar</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $_GET["Nama"]; ?></td>
                <td><?php echo $_GET["Jenis_Kelamin"]; ?>  </td>
                <td><?php echo $_GET["No_HP"]; ?></td>
                <td><?php echo $_GET["Email"]; ?></td>
                <td><?php echo $_GET["Pendidikan_Terakhir"]; ?></td>
                <td><?php echo $_GET["Alamat"]; ?></td>
                <td><img src="img/<?= $_GET["img"] ?>" alt="" class="img-fluid" width="100"</td>
            </tr>
       
    </tbody>
    </table>
    <a href="templatesiswabelajar.php" class="btn btn-danger mb-3 ml-3">Back to page student</a>
 <script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php 
$siswa = [
    [15786, "Anton", "Akuntansi", 19000, "ciledug"],
    [15643, "Jamal", "Administrasi", 13000, "cikokol"],
    [12789, "Sisca", "Akuntansi", 15000, "cipondoh"],
    [12985, "Amel", "Konsultan", 20000, "ciledug"],
    [13298, "Yoga", "Front Office", 12000, "cikokol"],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<table>
        <thead>
            <tr>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Profesi</th>
                <th scope="col">Gaji</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($siswa as $sis) : ?>
                <tr>
                    <td><?= $sis[0] ; ?></td>
                    <td><?= $sis[1] ; ?></td>
                    <td><?= $sis[2] ; ?></td>
                    <td><?= $sis[3] ; ?></td>
                    <td><?= $sis[4] ; ?></td>
                </tr>
                <?php endforeach ; ?>
        </tbody>
    </table>  



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
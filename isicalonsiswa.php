<?php 
$calonsiswa = [
    ["Anton", "antonuhuy@gmail.com", 081278045, "Laki-Laki", "S1", "Tidak", "Hanya Ingin Belajar Programming", "Tidak", "Full-Stack Developer Mon-Fri 9AM-6PM", "Selasa-Jumat Antara Jam 10.00-17.00"],
    ["Maya", "mayaa013@gmail.com", 081275904, "Perempuan", "D3", "Freelance", "Ingin Belajar Programming & Segera Bekerja", "Ya", "Full-Stack Developer Sat 9AM-6PM", "Senin Antara Jam 13.00-17.00"],
    ["Rheza", "rhezaaja@gmail.com", 08129870, "Laki-Laki", "S1", "Tidak", "Ingin Belajar Programming & Segera Bekerja", "Tidak", "Full-Stack Developer Mon-Fri 9AM-6PM", "Selasa-Jumat Antara Jam 10.00-17.00"],
    ["Jamal", "jamalamal@gmail.com", 08129982, "Laki-Laki", "SMA", "Tidak", "Hanya Ingin Belajar Programming", "Tidak", "Full-Stack Developer Sat 9AM-6PM", "Selasa-Jumat Antara Jam 10.00-17.00"],
    ["Kurnia", "kurniaayu@gmail.com", 08125098, "Perempuan", "S1", "Tidak", "Ingin Belajar Programming & Segera Bekerja", "Ya", "Full-Stack Developer Mon-Fri 9AM-6PM", "Sabtu Jam 10.00-12.00"],
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
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Email</th>
                <th scope="col">No. Telepon</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Pendidikan Terakhir</th>
                <th scope="col">Apa Anda Bekerja?</th>
                <th scope="col">Alasan Mengikuti Edu-Tech</th>
                <th scope="col">Memiliki Skill Programming</th>
                <th scope="col">Program Edutech Yang Akan Diikuti</th>
                <th scope="col">Hadir Untuk Interview</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($calonsiswa as $siswa) : ?>
                <tr>
                    <td><?= $siswa[0] ; ?></td>
                    <td><?= $siswa[1] ; ?></td>
                    <td><?= $siswa[2] ; ?></td>
                    <td><?= $siswa[3] ; ?></td>
                    <td><?= $siswa[4] ; ?></td>
                    <td><?= $siswa[5] ; ?></td>
                    <td><?= $siswa[6] ; ?></td>
                    <td><?= $siswa[7] ; ?></td>
                    <td><?= $siswa[8] ; ?></td>
                    <td><?= $siswa[9] ; ?></td>
                </tr>
                <?php endforeach ; ?>
        </tbody>
    </table>  

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .form{
            height: 1430px;
            width: 700px;
            border: 2px solid;
            margin-left: 200px;
            background-image: url("images2.jpg");
        }
        .form2{
            margin-left: 30px;
            margin-right:30px;
        }
        .form3{
            margin-left: 20px;
        }
        body{
            background-image: url("images.jpg")
        }
    
    </style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form class="form">
                <h3 class="text-center">Form Pendaftaran Calon Siswa Baru</h3>
                <p class="text-center">isilah data dengan benar agar dapat kami proses...</p>
                <hr><br><br>
                    <div class="form-group form2">
                        <label for="formGroupExampleInput">Nama Lengkap</label>
                        <input type="text" class="form-control" id="formGroupExampleInput">
                    </div>
                    <div class="form-group form2">
                        <label for="formGroupExampleInput2">Email</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2">
                    </div>
                    <div class="form-group form2">
                        <label for="formGroupExampleInput2">No.Telepon</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2">
                    </div>
                    <p class="form3">Jenis kelamin</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Perempuan
                        </label>
                    </div><br>
                    <p class="form3">Pendidikan Terakhir</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            SMK / SMA
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            D3
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            S1
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            S2
                        </label>
                    </div><br>
                    <p class="form3">Apakah Anda Bekerja</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Ya
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Tidak
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Freelance
                        </label>
                    </div>
                    <p class="form3">Alasan Anda Ingin Ikut Edu-Tech</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Hanya Ingin Belajar Programing
                        </label>
                    </div><br>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Ingin Belajar Programing & Segera Bekerja
                        </label>
                    </div><br>
                    <p class="form3">Saat ini, Apakah Anda Memiliki Keahlian Programing</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Ya
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Tidak
                        </label>
                    </div><br>
                    <p class="form3">Program Edu-tech.id apa yang Anda Akan Ikuti?</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Full-Stack Developer Mon-Fri 9AM-6PM
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Full-Stack Developer Sat 9AM-6PM
                        </label>
                    </div><br>
                    <p class="form3">Kapan Kamu Akan Hadir Untuk Pengenalan Program di Green Lake City Ruko Greatwall Block B no.28?</p>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Senin Antara Jam 13.00-17.00
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Selasa - Jumat Antara Jam 10.00-17.00
                        </label>
                    </div>
                    <div class="form-check form2">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                        Sabtu Jam 10.00-12.0
                        </label>
                    </div><br><br><hr>
                    <button type="button" class="btn btn-primary form2" OnClick="tekan()">Kirim</button>
                </form>
            </div>
        </div>
    </div>
    



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    function tekan(){
        alert("Pendaftaran Berhasil");
        window.location.href="../isicalonsiswa.php"
    }
</script>
</body>
</html>
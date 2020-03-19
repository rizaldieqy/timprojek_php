<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .gmbr{
            background-image: url("images.jpg");
            height: 800px;
        }
        .bgr{
            background: transparent;
            color: white;
        }
        .bgr2{
            background: transparent;
        }
        .utama{
            margin-top: 200px;
        }
    </style>
</head>
<body>
    
<div class="container-fluid gmbr">
        <div class="row">
            <div class="col-sm-12 utama">
            <div class="jumbotron jumbotron-fluid bgr text-center">
                <div class="jumbotron jumbotron- bgr2">
                    <div class="container">
                        <h1 class="display-4">Selamat Datang Di Website Edu-Tech</h1>
                        <p class="lead">Ingin jadi seorang programmer handal hanya dalam 6 bulan ???</p>
                        <p>Ayo klik daftar sekarang</p>
                        <button type="button" class="btn btn-outline-primary" onclick=muncul()>Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function muncul(){
        window.location.href="lagi.php"
    }
</script>
</body>
</html>
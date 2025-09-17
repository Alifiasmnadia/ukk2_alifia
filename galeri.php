<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <title>Galeri | SMKN 4 TASIKMALAYA</title>
    <link rel="icon" type="image/png" href="galeri/LOGO-SMK4.Ba-Cc_BE.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>
<?php include 'navbar.php';?>
    <!-- SECTION GALERI -->      
        <?php
            $galeri = [
                'galeri/ri.JPG',
                'galeri/ri1.JPG',
                'galeri/ri2.JPG',
                'galeri/ri3.JPG',
                'galeri/ri4.JPG',
                'galeri/ri5.JPG'
            ];
            
        ?>
    <div class="section mt-5 pt-5 pb-5">
        <div class="container">
            <h2 class="text-center mb-4">Galeri</h2>
            <div class="card p-4 shadow-sm">
                <h4 class="text-center">Upacara Peringatan HUT RI Ke-80</h4>
                <hr>
                <div class="row">
                    <?php foreach ($galeri as $gambar): ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img src="<?=$gambar?>" class="card-img-top" alt="Kegiatan 1">
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>

            <?php
            $galeri = [
                'galeri/english.JPG',
                'galeri/english1.JPG',
                'galeri/english2.JPG',
                'galeri/english3.JPG',
                'galeri/english4.JPG',
                'galeri/english5.JPG'
            ];
        ?>
            <div class="card p-4 shadow-sm pt-5 mt-5">
                <h4 class="text-center">Talkshow With Intrenship Students From America Attended By
                    ENGLISH CLUB</h4>
                <h4 class="text-center">Of SMKN 4 TASIKMALAYA 2025</h4>
                <hr>
                <div class="row">
                    <?php foreach ($galeri as $gambar): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="<?=$gambar?>" class="card-img-top" alt="">
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>


            <?php
            $galeri = [
                'galeri/hariguru.JPG',
                'galeri/hariguru1.JPG',
                'galeri/hariguru2.JPG',
                'galeri/hariguru3.JPG',
                'galeri/hariguru4.JPG',
                'galeri/hariguru5.JPG'
            ];
        ?>
            <div class="card p-4 shadow-sm pt-5 mt-5">
                <h4 class="text-center">HARI GURU 2024</h4>
                <hr>
                <div class="row">
                    <?php foreach ($galeri as $gambar): ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <img src="<?=$gambar?>" class="card-img-top" alt="">
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    </div>


    <!-- section footer -->
<?php include 'footer.php';?>
</body>

</html>
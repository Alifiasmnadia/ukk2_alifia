<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>
<?php include 'navbar.php';?>
    <!-- SECTION ESKUL -->
    <?php
    $eskul = [
            ["img" => "galeri/paskibra.png", "nama" => "Paskibra"],
            ["img" => "galeri/pmr.png", "nama" => "PMR"],
            ["img" => "galeri/Pramuka.png", "nama" => "Pramuka"],
            ["img" => "galeri/pks.png", "nama" => "PKS"],
            ["img" => "galeri/plh.png", "nama" => "PLH"],
            ["img" => "galeri/pd.jpg", "nama" => "Perisai Diri"],
            ["img" => "galeri/ec.png", "nama" => "English Club"],
            ["img" => "galeri/it.png", "nama" => "IT Club"],
            ["img" => "galeri/cinema.png", "nama" => "Cinematography"],
            ["img" => "galeri/laskarpustaka.png", "nama" => "Laskar Pustaka"],
            ["img" => "galeri/irma.png", "nama" => "Irma"],
            ["img" => "galeri/bulutangkis.png", "nama" => "Bulu Tangkis"],
            ["img" => "galeri/futsal.png", "nama" => "Futsal"],
            ["img" => "galeri/basket.png", "nama" => "Basket"],
            ["img" => "galeri/voli.jpg", "nama" => "Voli"],
            ["img" => "galeri/sepakbola.jpg", "nama" => "Sepak Bola"],
            ["img" => "galeri/seni.png", "nama" => "Seni"],
        ];
        $i = 0;
        ?>

    <section
        style="background-image: url(galeri/gelombang-putih.jpg); background-size: cover; background-position: center; padding: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center pt-5">Ekstrakulikuler</h2><br>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php while ($i < count($eskul)): ?>
            <div class="col-lg-4 mb-5">
                <div class="card text-center" style="border-radius: 20px;">
                    <div class="card-body">
                        <img src="<?= $eskul[$i]['img']?>" style="width: 200px; height: 200px; " alt="">
                        <p>
                        <h5><?= $eskul[$i]['nama'] ?></h5>
                        </p>
                    </div>
                </div>
            </div>
            <?php $i++; // naikin index ?>  
            <?php endwhile;?>
        </div>
    </section>

    <!-- section footer -->
    
<?php include 'footer.php';?>
</body>

</html>
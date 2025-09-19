<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <title>Berita | SMKN 4 TASIKMALAYA</title>
    <link rel="icon" type="image/png" href="galeri/LOGO-SMK4.Ba-Cc_BE.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <?php
    $berita = [
        [
            "img" => "galeri/berita.JPG",
            "title" => "SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja",
            "link" => "https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/"
        ],
        [
            "img" => "galeri/berita1.jpeg",
            "title" => "Honda Resmikan Safety Riding Lab di SMKN 4 Tasikmalaya, Ciptakan Bibit Keselamatan di Jawa Barat",
            "link" => "https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-pada-gen-z?page=all"
        ],
        [
            "img" => "galeri/berita2.jpg",
            "title" => "Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo Creanova",
            "link" => "https://radartasik.id/2023/03/02/siswa-smkn-4-tasikmalaya-adu-inovasi-dan-kreativitas-di-expo-creanova/"
        ],
        [
            "img" => "galeri/berita3.jpg",
            "title" => "Sinergi Bagi Negeri, DAM Kerjasama dengan SMKN 4 Tasikmalaya Terapkan KTBSM Sepeda Motor
                Astra Honda",
            "link" => "https://jabar.tribunnews.com/2023/03/02/sinergi-bagi-negeri-dam-kerjasama-dengan-smkn-4-tasikmalaya-terapkan-ktbsm-sepeda-motor-astra-honda"
        ]
    ];
    ?>


    <!-- SECTION berita -->
    <div class="container pt-5 mt-5">
        <h2 class="text-center my-5">Berita</h2>
        <div class="row">
            <?php foreach ($berita as $item): ?>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100">
                        <img src="<?= $item['img'] ?>" class="card-img-top img-fluid" alt="<?= $item['title'] ?>">
                        <div class="card-body text-center">
                            <h5><?= $item['title'] ?></h5>
                            <a href="<?= $item['link'] ?>" class="btn btn-outline-primary mt-3" target="_blank">Baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- section footer -->

    <?php include 'footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>SMKN 4 TASIKMALAYA</title>
    <link rel="icon" type="image/png" href="galeri/LOGO-SMK4.Ba-Cc_BE.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- section gambar awal -->
    <section class="pt-4 mt-4">
        <div class="div-section-gambar">
            <img src="galeri/smkatas.png" class="img-gambar-awal" alt="">
            <div class="div-gambar-awal">
                <h6 class="h6-gambarawal">
                    SMK Negeri 4 Tasikmalaya
                </h6>
                <h6 class="h6-bagian2">
                    Sekolah Pusat Keunggulan
                </h6>

            </div>
        </div>


        <!-- section statistik -->
        <div class="container">
            <div class="row py-5 my-5">
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card text-center border-0">
                            <div class="card-body div-statistik">
                                <img src="galeri/siswa.png" width="50px" height="50px" alt="">
                                <h2>1500</h2>
                                Peserta Didik
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body div-statistik">
                            <img src="galeri/pendidik.png" width="50px" height="50px" alt="">
                            <h2>82</h2>
                            Pendidik
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body div-statistik">
                            <img src="galeri/tu.png" width="50px" height="50px" alt="">
                            <h2>10</h2>
                            TU
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body div-statistik">
                            <img src="galeri/eskul.png" width="50px" height="50px" alt="">
                            <h2>17</h2>
                            ekstrakulikuler
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    </div><br><br>

    <!-- SECTION SAMBUTAN -->
    <section id="sambutan" class="p-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Sambutan Kepala Sekolah</h2>
                <hr class="mx-auto garis-judul">
            </div>

            <div class="row align-items-center kotak-sambutan p-4">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="galeri/kepalasekolah1.jpg" alt="Kepala Sekolah" class="img-fluid foto-kepsek">
                    <h4 class="mt-3 mb-1 fw-bold text-dark">Kurniawan S.Pd, M.Pd</h4>
                    <p class="text-muted small">Kepala Sekolah SMKN 4 Tasikmalaya</p>
                </div>

                <div class="col-lg-8">
                    <div class="isi-sambutan">
                        <p class="fst-italic text-secondary mb-3">Assalamualaikum Warahmatullahi Wabarakatuh</p>
                        <p>
                            Segala puji dan syukur kita panjatkan kehadirat Allah SWT. Semoga kita semua senantiasa berada
                            dalam lindungan-Nya. Atas izin dan rahmat-Nya pula kami dapat menghadirkan website SMK Negeri 4
                            Tasikmalaya ini. Kami berharap melalui website ini, para pengunjung dapat mengenal lebih dekat
                            sekolah kami sehingga dapat mempererat tali silaturahmi antara sekolah dengan masyarakat demi
                            kemajuan bersama.
                        </p>
                        <p>
                            Tiada gading yang tak retak, website ini masih dalam proses pengembangan dan tentunya masih
                            terdapat kekurangan. Kami sangat mengharapkan kritik dan saran yang membangun demi
                            penyempurnaan ke depannya.
                        </p>
                        <p>
                            Akhirnya, kami ucapkan terima kasih kepada semua pihak yang telah membantu dalam berbagai hal
                            sehingga website ini dapat terwujud. Semoga segala yang kita lakukan senantiasa bermanfaat bagi
                            masyarakat.
                        </p>
                        <p class="fst-italic text-secondary">Wassalamu’alaikum Warahmatullahi Wabarakatuh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- SECTION BERITA -->
    <?php
    $berita = [
        [
            "img" => "galeri/berita.JPG",
            "title" => "SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja",
            "link" => "https://radartasik.id/2023/10/12/smkn-4-tasikmalaya-koneksikan-iduka-dengan-pencari-kerja/"
        ],
        [
            "img" => "galeri/berita3.jpg",
            "title" => "Sinergi Bagi Negeri, DAM Kerjasama dengan SMKN 4 Tasikmalaya Terapkan KTBSM Sepeda Motor Astra Honda",
            "link" => "https://jabar.tribunnews.com/2023/03/02/sinergi-bagi-negeri-dam-kerjasama-dengan-smkn-4-tasikmalaya-terapkan-ktbsm-sepeda-motor-astra-honda"
        ]
    ];
    ?>
    <div class="container pt-5 section-title">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="judul-section ">Berita</h2><br>
                <p class="text-muted">Informasi dan kegiatan terbaru dari SMKN 4 Tasikmalaya</p>
                <div class="row">
                    <?php foreach ($berita as $item): ?>
                        <div class="col-lg-6 mb-4">
                            <div class="card h-100">
                                <div class="card-header text-center">
                                    <img src="<?= $item['img'] ?>" class="img-fluid d-block mx-auto" alt="">
                                </div>
                                <div class="card-body text-center">
                                    <h3><?= $item['title'] ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- satu tombol link ke halaman berita -->
                <div class="text-center mt-4">
                    <a href="berita.php" class="btn btn-outline-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div><br><br>
    </div>

    <!-- TUTUP SECTION BERITA -->


    <!-- SECTION GALERI -->
    <?php
    $galeri = [
        'galeri/ri.JPG',
        'galeri/english2.JPG',
        'galeri/hariguru4.JPG',
        'galeri/kegiatan1.JPG',
        'galeri/ri5.JPG',
        'galeri/english.JPG',
        'galeri/english4.JPG',
        'galeri/hariguru.JPG'
    ];
    ?>
    <section id="galeri" class="p-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary">Galeri Kegiatan</h2>
                <hr class="garis-judul mx-auto">
                <p class="text-muted">Kumpulan momen berharga kegiatan di SMKN 4 Tasikmalaya</p>
            </div>

            <div class="row g-4">
                <?php foreach ($galeri as $g): ?>
                    <div class="col-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-duration="800">
                        <div class="card border-0 shadow-sm overflow-hidden galeri-card">
                            <img src="<?= $g ?>" class="img-fluid galeri-img" alt="Galeri">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center mt-5">
                <a href="galeri.php" class="btn btn-primary px-4 py-2 rounded-pill shadow-sm">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>
    </section>



    <?php include 'footer.php'; ?>
</body>

</html>
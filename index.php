<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
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
        <div style="position: relative;  height: 700px;">
            <img src="galeri/smkatas.png" style="width: 100%; height: 100%;" alt="">
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5)">
                <h6
                    style="position: absolute; top: 20%; left: 50%; transform: translate(-50%, -50%); font-size: 50px; color: white; font-weight: bold;">
                    SMK Negeri 4 Tasikmalaya
                </h6>
                <h6
                    style="position: absolute; top: 30%; left: 50%; transform: translate(-50%, -50%); font-size: 24px; color: white;">
                    Sekolah Pusat Keunggulan
                </h6>

            </div>
        </div>

        <!-- SECTION GAMBAR -->
        <div class="card">
            <img src="" alt="">
        </div>


        <!-- SECTION SAMBUTAN -->
        <div class="container my-5 pt-5">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center">
                    <img src="galeri/kepalasekolah.CDMQ7SQv.png" height="250px" class="img-fluid rounded " alt="">
                    <h4 class="mt-3 mb-1">Kurniawan S.Pd, M.Pd</h4>
                    <p class="text-muted">Kepala Sekolah SMKN 4 Tasikmalaya</p>
                </div>
                <div class="col-lg-8">
                    <p>
                        Assalamualaikum Warahmatullahi Wabarakatuh
                    </p>
                    <p>
                        Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam
                        lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4
                        Tasikmalaya
                        ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat
                        mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara
                        sekolah
                        dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini
                        masih
                        dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya
                        yang membangun sangat kami harapkan untuk pengembangan ke depan.
                    </p>
                    <p>
                        Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat
                        disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua
                        yang
                        kita lakukan bermanfaat bagi masyarakat.
                    </p>
                    <p>
                        Wassalamu'alaikum Warahmatullahi Wabarakatuh.
                    </p>
                </div>
            </div>
        </div>
        <!-- SECTION BERITA -->



        <!-- SECTION BERITA -->
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Berita</h2><br>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><img src="galeri/berita2.jpg"
                                        class="img-fluid d-block mx-auto " alt="">
                                </div>
                                <div class="card-body">
                                    <h3>Siswa SMKN 4 Tasikmalaya Adu Inovasi dan Kreativitas di Expo Creanova</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><img src="galeri/berita.JPG" class="img-fluid d-block mx-auto "
                                        alt="">
                                </div>
                                <div class="card-body">
                                    <h3>SMKN 4 Tasikmalaya Koneksikan Iduka dengan Pencari Kerja</h3>
                                </div>
                            </div>
                        </div>
                        <div class="text-center pt-5">
                            <a href="berita.php" class="btn btn-outline-primary">baca selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <!-- TUTUP SECTION BERITA -->


            <!-- SECTION GALERI -->
            <?php
            $galeri = [
                'galeri/ri.JPG',
                'galeri/ri1.JPG',
                'galeri/ri2.JPG',
                'galeri/ri5.JPG'
            ];
            $i = 0;
            ?>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">Galeri</h2>
                    <div class="row">
                        <?php while ($i < count($galeri)): ?>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="<?= $galeri[$i] ?>" class="d-block mx-auto img-fluid" height="200px" alt=""
                                            style="object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    </div>
                    <br />
                    <div class="text-center">
                        <a href="galeri.php" class="btn btn-outline-primary">baca selengkapnya</a>
                    </div>
                </div>
            </div><br><br>
            <!-- section statistik -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card text-center border-0">
                            <div class="card-body"
                                style="background-color: rgb(48, 93, 160); color: white; border-radius: 10px; border-right: 12;">
                                <img src="galeri/siswa.png" width="50px" height="50px" alt="">
                                <h2>1500</h2>
                                Peserta Didik
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body"
                            style="background-color: rgb(48, 93, 160); color: white; border-radius: 10px; border-right: 12;">
                            <img src="galeri/pendidik.png" width="50px" height="50px" alt="">
                            <h2>82</h2>
                            Pendidik
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body"
                            style="background-color: rgb(48, 93, 160); color: white; border-radius: 10px; border-right: 12;">
                            <img src="galeri/tu.png" width="50px" height="50px" alt="">
                            <h2>10</h2>
                            TU
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card text-center border-0">
                        <div class="card-body"
                            style="background-color: rgb(48, 93, 160); color: white; border-radius: 10px; border-right: 12;">
                            <img src="galeri/eskul.png" width="50px" height="50px" alt="">
                            <h2>17</h2>
                            ekstrakulikuler
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div><br><br>

    <?php include 'footer.php'; ?>
</body>

</html>
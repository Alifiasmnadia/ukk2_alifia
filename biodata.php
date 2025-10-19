<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengembang | SMKN 4 Tasikmalaya</title>
    <link rel="stylesheet" href="./vendor/bs/bs.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="galeri/LOGO-SMK4.Ba-Cc_BE.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <!-- Section Profil -->
    <section class="profile-section text-center">
        <div class="container">
            <h2 class="text-center py-5 judul-section">Tentang Saya</h2>
            <div class="profile-card p-5 mx-auto" style="max-width: 700px;">
                <img src="galeri/saya.jpeg" alt="Alifia Asmanadia" class="profile-img mb-4 shadow">
                <h2 class="fw-bold text-primary">Alifia Asmanadia</h2>
                <p class="text-secondary">Siswa XII PPLG 1 | SMKN 4 Tasikmalaya</p>
                <hr class="mx-auto my-4" style="width: 80px; border: 2px solid #0d6efd;">

                <p class="text-muted">
                    Halo! Aku Alifia, siswi dari SMKN 4 Tasikmalaya jurusan PPLG (Pengembangan 
                    Perangkat Lunak dan Gim). Website ini aku buat sebagai bagian dari proyek pembelajaran 
                    sekaligus bentuk rasa bangga terhadap sekolahku.
                </p>
                <p class="text-muted">
                    Dalam pembuatan web ini, aku berfokus pada tampilan yang bersih, warna yang lembut,
                    dan informasi yang mudah dipahami. Tujuanku adalah membuat web yang bukan cuma informatif,
                    tapi juga nyaman dilihat oleh siapa pun yang berkunjung.
                </p>
                <div class="mt-5">
                    <blockquote>
                        “Simplicity is prerequisite for reliability.”
                    </blockquote>
                    <p class="text-secondary mt-2">— Edsger W. Dijkstra</p>
                </div>
                <a href="https://github.com/Alifiasmnadia" class="btn btn-primary mt-3 rounded-pill px-4" target="_blank">
                    <i class="bi bi-github"></i> Kunjungi GitHub Saya
                </a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./vendor/bs/bs.min.css" />
    <title>Ekstrakurikuler | SMKN 4 TASIKMALAYA</title>
    <link rel="icon" type="image/png" href="galeri/LOGO-SMK4.Ba-Cc_BE.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navbar -->
    <?php include 'navbar.php'; ?>

    <!-- Data Eskul -->
    <?php
    $eskul = [
        ["img" => "galeri/paskibra.png", "nama" => "Paskibra"],
        ["img" => "galeri/pmr.png", "nama" => "PMR"],
        ["img" => "galeri/pramuka.png", "nama" => "Pramuka"],
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
    ?>

    <!-- Section Eskul -->
    <section style="background-image: url(galeri/gelombang-putih.jpg); background-size: cover; background-position: center; padding: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="text-center pt-5">Ekstrakurikuler</h2>
                </div>
            </div>
        </div>

        <!-- Pencarian -->
        <div class="container mt-4">
            <div class="input-group mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Cari">
                <button class="btn btn-primary" onclick="cariEskul()">Cari</button>
            </div>
        </div>

        <!-- Daftar Eskul -->
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($eskul as $item): ?>
                <div class="col-lg-4 mb-5">
                    <div class="card text-center" style="border-radius: 20px;">
                        <div class="card-body">
                            <img src="<?= $item['img'] ?>" style="width: 200px; height: 200px;" alt="<?= $item['nama'] ?>">
                            <h5 class="mt-3"><?= $item['nama'] ?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Script Pencarian -->
    <script>
        function cariEskul() {
            const input = document.getElementById('searchInput').value.toLowerCase().trim();
            const cards = document.querySelectorAll('.card h5');
            let found = false;

        cards.forEach(card => {
            const nama = card.textContent.toLowerCase();
            if (nama.includes(input)) {
            card.closest('.col-lg-4').style.display = 'block'; // tampilkan
            found = true;
            } else {
            card.closest('.col-lg-4').style.display = 'none'; // sembunyikan
        }
    });

    if (!found) {
        alert("Eskul " + input.toUpperCase() + " tidak ditemukan!");
    }
}
    </script>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>
 
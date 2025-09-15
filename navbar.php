<!-- Bootstrap CSS di <head> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow" style="background-color: #005B8A;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="galeri/LOGO-SMK4.Ba-Cc_BE.png" width="50px" height="55px" alt="">
    </a>
    <h5 class="text-white mb-0">SMKN 4 Tasikmalaya</h5>

    <!-- Tombol hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-white" href="index.php">Beranda</a>
        </li>

        <!-- Dropdown Profil -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            Profil
          </a>
          <ul class="dropdown-menu" style="background-color: #005B8A; box-shadow:0px 4px 8px rgba(0,0,0,0.3);">
            <li><a class="dropdown-item text-white" href="sejarah.php">Sejarah</a></li>
            <li><a class="dropdown-item text-white" href="visimisi.php">Visi & Misi</a></li>
            <li><a class="dropdown-item text-white" href="identitas.php">Identitas Sekolah</a></li>
          </ul>
        </li>

        <!-- Dropdown Kurikulum -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            Kurikulum
          </a>
          <ul class="dropdown-menu" style="background-color: #005B8A; box-shadow:0px 4px 8px rgba(0,0,0,0.3);">
            <li><a class="dropdown-item text-white" href="jurusan.php">Konsentrasi Keahlian</a></li>
            <li><a class="dropdown-item text-white" href="prestasi.php">Prestasi</a></li>
          </ul>
        </li>

        <!-- Dropdown Kesiswaan -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">
            Kesiswaan
          </a>
          <ul class="dropdown-menu" style="background-color: #005B8A; box-shadow:0px 4px 8px rgba(0,0,0,0.3);">
            <li><a class="dropdown-item text-white" href="organisasi.php">Organisasi</a></li>
            <li><a class="dropdown-item text-white" href="eskul.php">Ekstrakulikuler</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="galeri.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="berita.php">Berita</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

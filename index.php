<?php
include "./public/koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arsen Article</title>
    <link rel="icon" href="./assets/logoaja.png" />

    <!--bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!--css-->
    <link rel="stylesheet" href="./public/index.css" />

    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Audiowide&family=Kavoon&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#top">
          <img
            src="./assets/logoarsen.png"
            alt="Logo arsen article"
            style="height: 50px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link login-link" href="./public/login.php">
                Login
              </a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="themeDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Tema
              </a>
              <div class="dropdown-menu" aria-labelledby="themeDropdown">
                <a
                  class="dropdown-item"
                  id="lightMode"
                  style="color: #333333 !important; cursor: pointer"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-sun-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"
                    />
                  </svg>
                  Light
                </a>
                <a
                  class="dropdown-item"
                  id="darkMode"
                  style="color: #333333 !important; cursor: pointer"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-moon-stars"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286"
                    />
                    <path
                      d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"
                    />
                  </svg>
                  Dark
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Gallery -->
    <section
      id="gallery"
      class="section gallery"
      style="padding-top: 60px; margin-top: 20px"
    >
      <div class="container">
        <h1
          class="text-center mb-4"
          style="font-family: Audiowide, sans-serif; font-weight: 400; font-style: normal; font-size: 60px;"
        >
          <span><b>GALLERY</b></span>
        </h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel"  data-bs-interval="2000">
          <div class="carousel-inner custom-gallery-size">
            <?php
            // Query untuk mengambil data gambar dari database
            $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
            $result = $conn->query($sql);

            $isActive = true; // Untuk menentukan gambar pertama yang aktif
            while ($row = $result->fetch_assoc()) {
                $image_path = './assets/' . $row['gambar']; // Path gambar
                ?>
                <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                  <img src="<?= file_exists($image_path) ? $image_path : 'path/to/default-image.jpg'; ?>" class="d-block w-100" alt="Gambar">
                </div>
                <?php
                $isActive = false; // Setelah gambar pertama, set active ke false
            }
            ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <!-- Hero -->
    <section id="home" class="section hero">
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex align-items-center">
            <div class="hero-content">
              <h1
                style="
                  font-family: Audiowide, sans-serif;
                  font-weight: 400;
                  font-style: normal;
                  font-size: 60px;
                  text-align: left;
                "
              >
                <span style="color: #5f95b7">ARSEN</span> ARTICLE
              </h1>
              <h4 style="text-align: justify">
                "Pada artikel ini, kita akan membahas banyak hal mengenai
                film-film baik yang berasal dari dalam maupun luar negeri"
                <hr />
              </h4>
              <div
                class="d-flex justify-content-between align-items-center"
                style="margin-top: 15px"
              >
                <!-- Sign Up and Login button -->
                <div style="margin-top: 100px">
                  <a href="./public/login.php">
                    <button class="btn" style="background-color: #5f95b7; color: white; border: none; margin-right: 10px;">
                      Login
                    </button>
                  </a>
                </div>

              </div>
              <!-- Date and Time -->
              <h6 style="text-shadow: none; margin-top: 15px; text-align: left">
                <b>
                  <span id="tanggal"></span>
                  <span id="jam"></span>
                </b>
              </h6>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Article -->
    <!-- article begin -->
    <section id="article" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">ARTICLE</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <?php
          $sql = "SELECT * FROM article ORDER BY tanggal DESC";
          $hasil = $conn->query($sql); 

          while($row = $hasil->fetch_assoc()){
          ?>
            <div class="col">
              <div class="card h-100" data-bs-toggle="modal" data-bs-target="#modal<?= $row['id'] ?>">
                <img src="./assets/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?= $row["judul"]?></h5>
                  <p class="card-text"><?= substr($row["isi"], 0, 100) ?>...</p>
                </div>
                <div class="card-footer">
                  <small class="text-body-secondary"><?= $row["tanggal"]?></small>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="modal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $row['id'] ?>" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel<?= $row['id'] ?>"><?= $row['judul'] ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="./assets/<?= $row['gambar'] ?>" class="img-fluid mb-3" alt="..." />
                    <p><?= $row['isi'] ?></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

          <?php
          }
          ?> 
        </div>
      </div>
    </section>
    <!-- article end -->

    <!-- About Section -->
    <section id="about" class="section about py-5 bg-light text-dark">
      <div class="container">
        <div class="row align-items-center">
          <!-- Bagian Kiri: Informasi Identitas -->
          <div class="col-md-6">
            <h2 class="fw-bold mb-5" style="font-size: 2.5rem; color: #5f95b7;">ABOUT ME</h2>
            <ul class="list-unstyled">
              <li><strong>Nama</strong> : Arsenio Farrell Winoto</li>
              <li><strong>Universitas</strong> : Universitas Dian Nuswantoro</li>
              <li><strong>NIM</strong> : A11.2023.15065</li>
              <li><strong>Kelas</strong> : PBW A11.4311</li>
              <li>
                <br>
                Pada Website ini saya membahas seputar film yang berasal dari luar maupun dalam negeri,
                dimana untuk menambahkan gambar maupun article dapat melalui admin page dengan username "admin" dan password "admin123"
              </li>
            </ul>
          </div>

          <!-- Bagian Kanan: Foto -->
          <div class="col-md-6 text-center">
            <img src="./assets/fotodiri@3x.png" alt="Foto Saya" class="img-fluid" style="width: 700px; height: 550px">
          </div>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="footer mt-2 bg-light">
      <div class="container py-3">
        <div class="text-center mb-3"><h5>Contact</h5></div>
        <div class="row text-center text-md-left">
          <div class="col-md-4">
            <div class="d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-house-door-fill"
                viewBox="0 0 16 16"
              >
                <path
                  d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"
                />
              </svg>
              <p class="ml-2 mb-0">Alamat: JL. Magersari 4 / 41</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-telephone-fill"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
                />
              </svg>
              <p class="ml-2 mb-0">Telepon: 081545617620</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="d-flex align-items-center">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-box-arrow-up-right"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"
                />
                <path
                  fill-rule="evenodd"
                  d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"
                />
              </svg>
              <p class="ml-2 mb-0">Website: Arsen Article</p>
            </div>
          </div>
        </div>
        <div class="text-center py-3 mt-3 border-top">
          Made By : Arsenio Farrell Winoto (A11.2023.15065)
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <script>
      // Tambahkan event listener untuk dark mode dengan localStorage
document.getElementById("darkMode").addEventListener("click", function () {
    document.body.classList.add("dark-mode");

    // Navbar dan Footer
    document.querySelector(".navbar").classList.add("navbar-dark", "bg-dark");
    document.querySelector(".footer").classList.add("bg-dark", "text-light");

    // Card bodies
    let cards = document.querySelectorAll(".card-body");
    cards.forEach(function (card) {
        card.classList.add("dark-mode");
    });

    // Modal - Dark Mode
    let modals = document.querySelectorAll(".modal-content");
    modals.forEach(function (modal) {
        modal.classList.add("bg-dark", "text-light");
    });

    // Section About - Dark Mode
    let aboutSection = document.querySelector(".section.about");
    if (aboutSection) {
        aboutSection.classList.add("bg-dark", "text-light");
    }

    // **Simpan status dark mode ke localStorage**
    localStorage.setItem("darkMode", "enabled");
});

document.getElementById("lightMode").addEventListener("click", function () {
    document.body.classList.remove("dark-mode");

    // Navbar dan Footer
    document.querySelector(".navbar").classList.remove("navbar-dark", "bg-dark");
    document.querySelector(".footer").classList.remove("bg-dark", "text-light");

    // Card bodies
    let cards = document.querySelectorAll(".card-body");
    cards.forEach(function (card) {
        card.classList.remove("dark-mode");
    });

    // Modal - Light Mode
    let modals = document.querySelectorAll(".modal-content");
    modals.forEach(function (modal) {
        modal.classList.remove("bg-dark", "text-light");
    });

    // Section About - Light Mode
    let aboutSection = document.querySelector(".section.about");
    if (aboutSection) {
        aboutSection.classList.remove("bg-dark", "text-light");
    }

    // **Simpan status light mode ke localStorage**
    localStorage.setItem("darkMode", "disabled");
});

// **Tambahkan pengecekan saat halaman dimuat**
window.onload = function () {
    if (localStorage.getItem("darkMode") === "enabled") {
        document.body.classList.add("dark-mode");

        // Navbar dan Footer
        document.querySelector(".navbar").classList.add("navbar-dark", "bg-dark");
        document.querySelector(".footer").classList.add("bg-dark", "text-light");

        // Card bodies
        let cards = document.querySelectorAll(".card-body");
        cards.forEach(function (card) {
            card.classList.add("dark-mode");
        });

        // Modal
        let modals = document.querySelectorAll(".modal-content");
        modals.forEach(function (modal) {
            modal.classList.add("bg-dark", "text-light");
        });

        // Section About
        let aboutSection = document.querySelector(".section.about");
        if (aboutSection) {
            aboutSection.classList.add("bg-dark", "text-light");
        }
    }
};



        

      //js tanggal dan waktu
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu() {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML =
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>
  </body>
</html>

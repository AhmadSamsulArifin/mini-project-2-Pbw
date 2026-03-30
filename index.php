<?php include 'koneksi.php'; ?>

<?php
$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$about = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM about LIMIT 1"));
$skills = mysqli_query($conn, "SELECT * FROM skills");
$experiences = mysqli_query($conn, "SELECT * FROM experiences");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?= $profile['name']; ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"/>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark navTop sticky-top">
  <div class="container">

    <a class="navbar-brand fw-bold" href="#home">
      <span class="logoDot"></span> MyPortfolio
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="menu" class="collapse navbar-collapse">
      <ul class="navbar-nav ms-lg-5 me-auto gap-lg-3">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>

      <div class="d-flex">
        <a class="btn btnTalk" href="#contact">Let’s Talk</a>
      </div>
    </div>

  </div>
</nav>

<header id="home" class="heroWrap">
  <div class="container py-5">
    <div class="row align-items-center g-4">

      <div class="col-lg-6">
        <h1 class="heroTitle fw-bold mb-2">
          Hi, I’m <span class="heroName"><?= $profile['name']; ?></span>
        </h1>

        <h2 class="heroRole fw-bold mb-3"><?= $profile['role']; ?></h2>

        <p class="heroText mb-4"><?= $profile['tagline']; ?></p>

        <div class="d-flex gap-2 flex-wrap mb-4">
          <a href="#about" class="btn btnMain">About Me</a>
          <a href="#certificates" class="btn btnOutline">See Certificates</a>
        </div>

        <div class="d-flex gap-3">
          <a class="socialBtn" href="https://instagram.com" target="_blank">
            <i class="bi bi-instagram"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="photoCard ms-lg-auto">
          <img src="assets/foto saya.jpeg" class="heroPhoto">
        </div>
      </div>

    </div>
  </div>
</header>

<section id="about" class="sectionArea">
  <div class="container py-5">
    <div class="row g-4">

      <div class="col-lg-5">
        <div class="darkCard p-4">
          <h3 class="fw-bold mb-1">Quick Info</h3>

          <div class="infoBox mb-3">
            <div class="smallText">Fokus</div>
            <div class="fw-bold"><?= $about['focus']; ?></div>
          </div>

          <div class="infoBox mb-3">
            <div class="smallText">Minat</div>
            <div class="fw-bold"><?= $about['interest']; ?></div>
          </div>

          <div class="infoBox">
            <div class="smallText">Tujuan</div>
            <div class="fw-bold"><?= $about['goal']; ?></div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="glassCard p-4">
          <h2 class="fw-bold mb-3">About Me</h2>

          <p class="textSoft mb-4"><?= $about['description']; ?></p>

          <div class="lineDivider mb-4"></div>

          <h4 class="fw-bold mb-3">Skills</h4>

          <div class="row g-3">
            <?php while($s = mysqli_fetch_assoc($skills)) { ?>
              <div class="col-md-6">
                <div class="skillBox">
                  <div class="d-flex justify-content-between">
                    <b><?= $s['name']; ?></b>
                    <span class="textSoft"><?= $s['level']; ?>%</span>
                  </div>
                  <div class="progress progressDark mt-2">
                    <div class="progress-bar barCyan" style="width: <?= $s['level']; ?>%"></div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

          <hr class="my-4 hrSoft">

          <h4 class="fw-bold mb-3">Experience</h4>

          <?php while($e = mysqli_fetch_assoc($experiences)) { ?>
            <div class="timeItem">
              <h6 class="fw-bold"><?= $e['title']; ?></h6>
              <div class="timeSmall"><?= $e['period']; ?></div>
            </div>
          <?php } ?>

        </div>
      </div>

    </div>
  </div>
</section>

<section id="certificates" class="sectionArea sectionSoft">
  <div class="container py-5">

    <div class="d-flex justify-content-between align-items-end mb-3">
      <h2 class="fw-bold">Certificates</h2>
    </div>

    <div class="row g-3">
      <?php while($c = mysqli_fetch_assoc($certificates)) { ?>
        <div class="col-md-6">
          <div class="glassCard p-4 h-100 certHover">
            <div class="d-flex justify-content-between">
              <h5 class="fw-bold"><?= $c['title']; ?></h5>
              <span class="badge yearBadge"><?= $c['year']; ?></span>
            </div>

            <a href="<?= $c['link']; ?>" class="btn btnOutline w-100 mt-3">
              Lihat Sertifikat
            </a>
          </div>
        </div>
      <?php } ?>
    </div>

  </div>
</section>

<section id="contact" class="sectionArea">
  <div class="container py-5">
    <div class="glassCard p-4">
      <h2 class="fw-bold mb-2">Contact</h2>
      <div class="d-flex gap-2">
        <span class="pill">✉️ <?= $profile['email']; ?></span>
        <span class="pill">📍 <?= $profile['location']; ?></span>
      </div>
    </div>
  </div>
</section>

<footer class="py-4 text-center textSoft small">
  © <?= date("Y"); ?> <?= $profile['name']; ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->renderSection('title') ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="<?= base_url() ?>">7AM Bakers Club</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link <?= url_is('/') ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= url_is('shop*') ? 'active' : '' ?>" href="<?= base_url('shop') ?>">Shop</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= url_is('contact*') ? 'active' : '' ?>" href="<?= base_url('contact') ?>">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= url_is('wholesale*') ? 'active' : '' ?>" href="<?= base_url('wholesale') ?>">Wholesale</a>
        </li>
    </ul>
      <div class="d-flex">
        <a href="<?= base_url('register') ?>" class="btn btn-outline-primary me-2">Register</a>
        <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
      </div>
    </div>
  </div>
</nav>

<!-- Main Content -->
<main>
  <?= $this->renderSection('content') ?>
</main>

<!-- Subscribe Section -->
<section class="subscribe py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text -->
      <div class="col-md-6 mb-3 mb-md-0">
        <h2 class="fw-bold text-white">SUBSCRIBE</h2>
        <p class="text-light">
          Join our mailing list and receive insights, promotions, 
          and the newest product information directly to your inbox.
        </p>
      </div>
      <!-- Form -->
      <div class="col-md-6">
        <form class="d-flex">
          <input type="email" class="form-control me-2" placeholder="Input Your Email Address">
          <button class="btn btn-danger">Subscribe</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer py-5 bg-dark text-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5 class="fw-bold">PT. TUJUH PAGI BALI</h5>
        <p>+628113850303</p>
        <p>cs@sevenambakers.com</p>
        <p>@7am.bakers</p>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold">Our Office:</h6>
        <p>Jl. Sentra No.78, Kekeran, Kec. Mengwi, Kabupaten Badung, Bali 80351</p>
      </div>
      <div class="col-md-4">
        <h6 class="fw-bold">Working Hour:</h6>
        <p>9AM–6PM All Day</p>
      </div>
    </div>
    <div class="text-center mt-4">
      <p>© <?= date('Y') ?> 7AM Bakers Club. All Rights Reserved.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

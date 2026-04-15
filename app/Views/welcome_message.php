<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
Home - 7AM Bakers Club
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="hero d-flex align-items-center text-center text-white">
  <div class="container">
    <h1 class="fw-bold">Empower Your Business Purchasing</h1>
    <p class="lead">
      Streamline every order with a platform built for speed, reliability, and control.
      Bringing clarity and confidence to every order you make.
    </p>
    <a href="<?= base_url('shop') ?>" class="btn btn-warning btn-lg mt-3">Shop Now</a>
  </div>
</section>

<!-- Features Section -->
<section class="features py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>
    <div class="row text-center">
      <div class="col-md-3">
        <h5 class="fw-bold">High Quality</h5>
        <p>Cooked from top ingredients</p>
      </div>
      <div class="col-md-3">
        <h5 class="fw-bold">Free Shipping*</h5>
        <p>On Uluwatu, Sanur, Canggu, Ubud, Nyanyi area</p>
      </div>
      <div class="col-md-3">
        <h5 class="fw-bold">Time Limit</h5>
        <p>Fast delivery and reliable schedule</p>
      </div>
      <div class="col-md-3">
        <h5 class="fw-bold">24 / 7 Support</h5>
        <p>Always ready to assist you</p>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>

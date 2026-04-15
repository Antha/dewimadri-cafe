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
<section class="features py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Why Choose Us?</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="feature-box shadow-sm p-4 text-center h-100">
          <div class="icon mb-3">
            <i class="bi bi-award-fill"></i>
          </div>
          <h5 class="fw-bold">High Quality</h5>
          <p>Cooked from top ingredients</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box shadow-sm p-4 text-center h-100">
          <div class="icon mb-3">
            <i class="bi bi-truck"></i>
          </div>
          <h5 class="fw-bold">Free Shipping*</h5>
          <p>On Uluwatu, Sanur, Canggu, Ubud, Nyanyi area</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box shadow-sm p-4 text-center h-100">
          <div class="icon mb-3">
            <i class="bi bi-clock-fill"></i>
          </div>
          <h5 class="fw-bold">Time Limit</h5>
          <p>Fast delivery and reliable schedule</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box shadow-sm p-4 text-center h-100">
          <div class="icon mb-3">
            <i class="bi bi-headset"></i>
          </div>
          <h5 class="fw-bold">24 / 7 Support</h5>
          <p>Always ready to assist you</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Explore Product Range Section -->
<section class="explore py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Explore Our Product Range</h2>
      <p class="lead">
        Browse through our complete catalog of business-ready products 
        designed to support your company’s needs.
      </p>
    </div>
    <div class="row g-4">
      <!-- Product 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/almond-1.png" 
               class="card-img-top" alt="Chocolate Pastry">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Chocolatine</h6>
            <p class="text-muted">Delicious chocolate pastry with almond topping</p>
          </div>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/bg-baker.jpeg" 
               class="card-img-top" alt="Almond Croissant">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Croissant</h6>
            <p class="text-muted">Classic croissant dusted with powdered sugar</p>
          </div>
        </div>
      </div>
      <!-- Product 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/broiche-1.png" 
               class="card-img-top" alt="Packaging Box">
          <div class="card-body text-center">
            <h6 class="fw-bold">Packaging Box</h6>
            <p class="text-muted">Secure and reliable packaging for delivery</p>
          </div>
        </div>
      </div>
			<!-- Product 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/almond-1.png" 
               class="card-img-top" alt="Chocolate Pastry">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Chocolatine</h6>
            <p class="text-muted">Delicious chocolate pastry with almond topping</p>
          </div>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/bg-baker.jpeg" 
               class="card-img-top" alt="Almond Croissant">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Croissant</h6>
            <p class="text-muted">Classic croissant dusted with powdered sugar</p>
          </div>
        </div>
      </div>
      <!-- Product 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/broiche-1.png" 
               class="card-img-top" alt="Packaging Box">
          <div class="card-body text-center">
            <h6 class="fw-bold">Packaging Box</h6>
            <p class="text-muted">Secure and reliable packaging for delivery</p>
          </div>
        </div>
      </div>
			<!-- Product 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/almond-1.png" 
               class="card-img-top" alt="Chocolate Pastry">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Chocolatine</h6>
            <p class="text-muted">Delicious chocolate pastry with almond topping</p>
          </div>
        </div>
      </div>
      <!-- Product 2 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/bg-baker.jpeg" 
               class="card-img-top" alt="Almond Croissant">
          <div class="card-body text-center">
            <h6 class="fw-bold">Almond Croissant</h6>
            <p class="text-muted">Classic croissant dusted with powdered sugar</p>
          </div>
        </div>
      </div>
      <!-- Product 3 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="/images/broiche-1.png" 
               class="card-img-top" alt="Packaging Box">
          <div class="card-body text-center">
            <h6 class="fw-bold">Packaging Box</h6>
            <p class="text-muted">Secure and reliable packaging for delivery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

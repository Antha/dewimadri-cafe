<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
Home - 7AM Bakers Club
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Banner -->
<section class="banner d-flex align-items-center text-center">
  <div class="container">
    <h2 class="fw-bold">Our Products</h2>
    <p class="lead">
      Discover our delightful range of freshly baked breads and pastries, 
      crafted to bring joy to your taste buds every morning.
    </p>
  </div>
</section>

<!-- Product Section -->
<section class="products py-5">
  <div class="container">
    <div class="row">
      <!-- Sidebar Filter -->
      <div class="col-md-3">
        <div class="card shadow-sm mb-4">
          <div class="card-body">
            <h5 class="fw-bold mb-3">Search Our Product Here</h5>
            <input type="text" class="form-control mb-3" placeholder="Search...">

            <h6 class="fw-bold mt-4">Price Range</h6>
            <input type="range" class="form-range" min="0" max="100000" step="1000">

            <h6 class="fw-bold mt-4">Category</h6>
            <ul class="list-unstyled">
              <li><input type="checkbox"> Bread New</li>
              <li><input type="checkbox"> Pastry New</li>
              <li><input type="checkbox"> Bread Artisan</li>
              <li><input type="checkbox"> Croissant</li>
              <li><input type="checkbox"> Bun</li>
              <li><input type="checkbox"> Plain Bread</li>
              <li><input type="checkbox"> Pie</li>
              <li><input type="checkbox"> Bomboloni</li>
            </ul>

            <button class="btn btn-outline-secondary w-100 mt-3">Reset</button>
          </div>
        </div>
      </div>

      <!-- Product Grid -->
      <div class="col-md-9">
        <div class="row g-4">
          <!-- Product Card -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/almond-1.png" class="card-img-top" alt="Almond Croissant">

              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Chocolatine</h6>
                <p class="text-muted">Rp. 32.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/bg-baker.jpeg" class="card-img-top" alt="Almond Croissant">
              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Croissant</h6>
                <p class="text-muted">Rp. 31.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/broiche-1.png" class="card-img-top" alt="Bomboloni Chocolate">
              <div class="card-body">
                <h6 class="fw-bold">(New) Bomboloni Chocolate 65gr</h6>
                <p class="text-muted">Rp. 20.000</p>
              </div>
            </div>
          </div>
          <!-- Tambahkan produk lain sesuai kebutuhan -->
        </div>
				<div class="row g-4">
          <!-- Product Card -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/almond-1.png" class="card-img-top" alt="Almond Croissant">

              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Chocolatine</h6>
                <p class="text-muted">Rp. 32.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/bg-baker.jpeg" class="card-img-top" alt="Almond Croissant">
              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Croissant</h6>
                <p class="text-muted">Rp. 31.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/broiche-1.png" class="card-img-top" alt="Bomboloni Chocolate">
              <div class="card-body">
                <h6 class="fw-bold">(New) Bomboloni Chocolate 65gr</h6>
                <p class="text-muted">Rp. 20.000</p>
              </div>
            </div>
          </div>
          <!-- Tambahkan produk lain sesuai kebutuhan -->
        </div>
				<div class="row g-4">
          <!-- Product Card -->
          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/almond-1.png" class="card-img-top" alt="Almond Croissant">

              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Chocolatine</h6>
                <p class="text-muted">Rp. 32.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/bg-baker.jpeg" class="card-img-top" alt="Almond Croissant">
              <div class="card-body">
                <h6 class="fw-bold">(New) Almond Croissant</h6>
                <p class="text-muted">Rp. 31.000</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card h-100 shadow-sm">
              <img src="/images/broiche-1.png" class="card-img-top" alt="Bomboloni Chocolate">
              <div class="card-body">
                <h6 class="fw-bold">(New) Bomboloni Chocolate 65gr</h6>
                <p class="text-muted">Rp. 20.000</p>
              </div>
            </div>
          </div>
          <!-- Tambahkan produk lain sesuai kebutuhan -->
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>

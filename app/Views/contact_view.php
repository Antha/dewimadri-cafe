<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
Contact - 7AM Bakers Club
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Hero Section -->
<section class="hero git d-flex align-items-center text-center text-white">
  <div class="container">
    <h1 class="fw-bold">Get in Touch</h1>
    <p class="lead">
      Have a question or idea? Our team is just a message away!
    </p>
  </div>
</section>

<!-- Contact Section -->
<section class="contact py-5 bg-dark text-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Contact Info -->
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-4">Contact Information</h2>
        <p class="mb-2"><strong>Phone:</strong> +628113850303</p>
        <p class="mb-2"><strong>Email:</strong> cs@sevenambakers.com</p>

        <h5 class="fw-bold mt-4">Our Office</h5>
        <p>Jl. Sentra No.78, Kekeran, Kec. Mengwi, Kabupaten Badung, Bali 80351</p>

        <h5 class="fw-bold mt-4">Working Hour</h5>
        <p>9AM–6PM All Day</p>
      </div>

      <!-- Map -->
      <div class="col-md-6">
        <div class="map-container shadow-sm">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!..." 
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>


<?= $this->endSection() ?>

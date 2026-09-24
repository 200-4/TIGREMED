<?php include 'header.php'; ?>

<!-- ============ HERO ============ -->
<section class="portfolio-hero">
  <div class="portfolio-hero-content reveal">
    <p class="portfolio-hero-eyebrow">Our Products</p>
    <h1 class="portfolio-hero-title">Quality products for <span>better care</span></h1>
    <p class="portfolio-hero-text">
      Discover our growing portfolio of trusted medicines and healthcare
      solutions supporting patients and providers across Uganda.
    </p>
    <a href="#product-list" class="btn btn-primary portfolio-hero-cta">Explore Products <i class="fas fa-arrow-down"></i></a>
  </div>
</section>


<!-- ============ PORTFOLIO ============ -->
<section class="portfolio-section">
  <div class="product-image-container">
    <div class="portfolio-graphic">
      <img src="assets/man_happy.png" alt="Tigremed product" class="portfolio-image" />
    </div>
  </div>

  <div class="product-content-container">
    <h2 class="content-heading">Our Product Portfolio</h2>
    <p>Our product strategy reflects our evolution into a global innovation-led pharmaceutical organization. With a strong presence across key international markets, we deliver high-quality, science-driven products that advance patient care and address health challenges worldwide.</p>
    <p>Built on decades of research excellence, operational strength, and a commitment to transform lives, our portfolio spans the therapeutic areas of respiratory, dermatology and oncology.</p>
    <p>Our product offerings are anchored to meet the distinct needs of patients, healthcare providers, and global healthcare systems.</p>
  </div>
</section>

<!-- Product category -->
 <section class="product-list" id="product-list">
   <div class="product-list-heading">
    <p class="product-list-eyebrow">Our range</p>
    <h2>Featured products</h2>
    <p>Focused healthcare solutions sourced from trusted manufacturers.</p>
   </div>
    <?php include "products_range.php"; ?>
 </section>

<!-- Logistics -->
<section class="logistics-section" aria-label="Efficient logistics for better access">
  <div class="logistics-overlay">
    <div class="logistics-overlay-icon" aria-hidden="true">
      <i class="fas fa-truck-moving"></i>
    </div>
    <div class="logistics-overlay-copy">
      <h2>Connected healthcare delivery</h2>
      <p>Reliable distribution support that keeps essential products moving safely and on time.</p>
    </div>
  </div>
</section>


<?php include 'footer.php'; ?>
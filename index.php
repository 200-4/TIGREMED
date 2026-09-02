<?php include 'header.php'; ?>

  <main>

    <!-- ═══════════════ HERO SECTION ═══════════════ -->
    <section class="hero" id="hero" aria-label="Hero section">
      <div class="hero-carousel" aria-live="polite">
        <div class="hero-slide is-active">
          <img src="assets/tigre_intro.png" alt="Healthcare professional and product support" loading="eager" />
        </div>

      </div>

      <!-- Orange → white gradient overlay -->
      <div class="hero-overlay" aria-hidden="true"></div>

      <div class="hero-content reveal delay-1">
        <!-- Text column — 60% width -->
        <div class="hero-text-col">
          <h1 class="hero-title" id="heroTitle">
            <span class="cursor-blink"></span>
          </h1>
          <p class="hero-tagline">
            To enhance patients' lives, inspire hope and help provide<br class="br-desk"/>
            world-class healthcare that is accessible to all.
          </p>
          <a href="#about" class="btn btn-outline">KNOW MORE</a>
        </div>
      </div>

      <div class="hero-carousel-controls" aria-label="Hero carousel controls">
        <button type="button" class="hero-carousel-btn prev" aria-label="Previous slide">&#10094;</button>
        <button type="button" class="hero-carousel-btn next" aria-label="Next slide">&#10095;</button>
      </div>
    </section>

    <!-- ═══════════════ ABOUT / SECOND CONTAINER ═══════════════ -->
    <section class="about-section" id="about" aria-label="About Tigremed">
      <div class="about-inner">

        <div class="about-image-wrap reveal delay-2">
          <div class="about-image-slider" aria-label="Tigremed highlights slider">
            <button type="button" class="about-slider-btn prev" aria-label="Previous image">&#10094;</button>
            <div class="about-slide is-active">
              <img
                src="assets/Progermila.png"
                alt="Tigremed pharmaceutical distribution"
                loading="lazy"
              />
            </div>
            <div class="about-slide">
              <img
                src="assets/Hantacid.png"
                alt="Tigremed healthcare solutions"
                loading="lazy"
              />
            </div>
            <button type="button" class="about-slider-btn next" aria-label="Next image">&#10095;</button>
          </div>
        </div>

        <div class="about-content reveal delay-3">
          <p class="about-text">
            Tigremed Pharma Co Ltd is a Uganda-focused pharmaceutical
            market access, distribution and healthcare supply chain company
            committed to improving the availability of quality medicines,
            medical devices and healthcare solutions.
          </p>
          <p class="about-text">
            We work closely with hospitals, clinics, pharmacies, healthcare
            programs, development partners, and manufacturers to
            strengthen healthcare delivery throughout Uganda.
          </p>
          <p class="about-text">
            Our focus is to bridge the gap between healthcare demand
            and product availability by building dependable supply chains,
            ensuring regulatory compliance, and delivering
            exceptional market support for healthcare products.
          </p>
        </div>
      </div>
    </section>

    <!-- ═══════════════ CORPORATE VIDEO SECTION ═══════════════ -->
    <section class="video-section" id="video" aria-label="Corporate video">
      <div class="video-inner">
        <h2 class="video-title">VIEW OUR CORPORATE VIDEO</h2>
        <div class="video-iframe-wrap">
          <iframe
            src="https://youtu.be/vuH7vV6l4pM?si=eSROhu_m8Ce9FcMz"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
          ></iframe>
        </div>

      </div>
    </section>

    <!-- ═══════════════ PRODUCTS SECTION ═══════════════ -->
    <section class="products-section" id="products" aria-label="Products">

      <!-- Banner -->
      <div class="products-banner">
        <div class="products-banner-content">
          <h2 class="products-banner-title">Trusted Pharmaceutical Products for<br />Healthcare Delivery</h2>
          <p class="products-banner-text">
            We work closely with hospitals, clinics, pharmacies,
            healthcare programs, development partners, and manufacturers to
            strengthen healthcare delivery throughout Uganda.<br />
            Our focus is to bridge the gap between healthcare demand and
            product availability by building dependable supply chains, ensuring
            regulatory compliance, and delivering exceptional market support for
            healthcare products.
          </p>
        </div>
        <div class="products-banner-img" aria-hidden="true">
          <!-- Medicine bottle placeholder -->
          <img src="assets/tigremed_smiling-man.jpg" alt="" loading="lazy">
        </div>
      </div>

      <!-- Range -->
      <div class="products-range">
        <div class="range-header">
          <h3 class="range-title"><span class="range-accent">OUR PRODUCT RANGE</span></h3>
          <p class="range-subtitle">Explore our pharmaceutical product portfolio.</p>
        </div>
        <div class="product-carousel reveal delay-4">
        <div class="product-carousel-controls" aria-label="Product carousel controls">
        <button type="button" class="carousel-btn" data-scroll-dir="prev" aria-label="Scroll products left">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button type="button" class="carousel-btn" data-scroll-dir="next" aria-label="Scroll products right">
            <i class="fas fa-chevron-right"></i>
        </button>
        </div>

        <?php include "products_range.php"; ?>
        </div>

        <div class="range-cta">
          <a href="products.php" class="btn btn-primary">View Full Portfolio</a>
        </div>
      </div>
    </section>

  </main>
  <?php include 'footer.php'; ?>



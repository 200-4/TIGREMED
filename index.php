<?php include 'header.php'; ?>

  <main>

    <!-- ═══════════════ HERO SECTION ═══════════════ -->
    <section class="hero" id="hero" aria-label="Hero section">

      <!-- Background video -->
      <video class="hero-video" autoplay muted loop playsinline preload="none" aria-hidden="true">
        <!-- Replace src with actual video path -->
        <source src="assets/introduction_video.mp4" type="video/mp4" />
      </video>

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

    </section>

    <!-- ═══════════════ ABOUT / SECOND CONTAINER ═══════════════ -->
    <section class="about-section" id="about" aria-label="About Tigremed">
      <div class="about-inner">

        <div class="about-image-wrap reveal delay-2">
          <img
            src="assets/distribute.png"
            alt="Tigremed pharmaceutical distribution"
            class="about-img"
            loading="lazy"
          />
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
        <div class="video-frame-wrap">
          <div class="video-player-shell">
            <!-- Replace with your actual video embed (YouTube iframe or <video>) -->
            <iframe
              class="corp-video-iframe"
              src="https://www.youtube.com/embed/dQw4w9WgXcQ?rel=0&modestbranding=1"
              title="Tigremed Corporate Video"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
              loading="lazy"
            ></iframe>
          </div>
          <div class="video-tagline-bar">
            <span>Delivering quality healthcare solutions across Uganda</span>
          </div>
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
          <img src="assets/product_tigre.png" alt=""  loading="lazy">
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



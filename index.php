<?php include 'header.php'; ?>

  <main>

    <!-- ═══════════════ HERO SECTION ═══════════════ -->
    <section class="hero" id="hero" aria-label="Hero section">

      <!-- Background video -->
      <video class="hero-video" autoplay muted loop playsinline preload="none" aria-hidden="true">
        <!-- Replace src with actual video path -->
        <source src="assets/hero-bg.mp4" type="video/mp4" />
      </video>

      <!-- Orange → white gradient overlay -->
      <div class="hero-overlay" aria-hidden="true"></div>

      <div class="hero-content">
        <h1 class="hero-title">
          ENHANCING<br />PATIENTS'<br />LIVES
        </h1>
        <p class="hero-tagline">
          To enhance patients' lives, inspire hope and help provide<br class="br-desk"/>
          world-class healthcare that is accessible to all.
        </p>
        <a href="#about" class="btn btn-outline">KNOW MORE</a>
      </div>
    </section>

    <!-- ═══════════════ ABOUT / SECOND CONTAINER ═══════════════ -->
    <section class="about-section" id="about" aria-label="About Tigremed">
      <div class="about-inner">

        <div class="about-image-wrap">
          <img
            src="assets/distribute.png"
            alt="Tigremed pharmaceutical distribution"
            class="about-img"
            loading="lazy"
          />
        </div>

        <div class="about-content">
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
          <svg viewBox="0 0 200 260" xmlns="http://www.w3.org/2000/svg" width="200" height="260">
            <rect x="60" y="30" width="80" height="130" rx="10" fill="#c0392b" opacity="0.8"/>
            <rect x="70" y="10" width="60" height="28" rx="5" fill="#922b21"/>
            <rect x="62" y="60" width="76" height="15" fill="white" opacity="0.3"/>
            <text x="100" y="115" text-anchor="middle" fill="white" font-size="11" font-family="Inter,sans-serif" font-weight="700">TIGREMED</text>
            <!-- pills scattered -->
            <ellipse cx="40" cy="190" rx="18" ry="10" fill="#e74c3c" transform="rotate(-30,40,190)"/>
            <ellipse cx="155" cy="200" rx="16" ry="9" fill="#c0392b" transform="rotate(20,155,200)"/>
            <ellipse cx="100" cy="220" rx="14" ry="8" fill="#e74c3c" transform="rotate(-10,100,220)"/>
          </svg>
        </div>
      </div>

      <!-- Range -->
      <div class="products-range">
        <div class="range-header">
          <h3 class="range-title"><span class="range-accent">OUR PRODUCT RANGE</span></h3>
          <p class="range-subtitle">Explore our pharmaceutical product portfolio.</p>
        </div>

        <div class="product-grid" id="product-grid">

          <article class="product-card">
            <div class="product-card-img">
              <img src="assets/azithromycin.png" alt="Azithromycin Tablets" loading="lazy" width="200" height="140"
                onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"/>
              <div class="product-img-fallback" style="display:none">
                <svg viewBox="0 0 200 140" xmlns="http://www.w3.org/2000/svg" width="200" height="140">
                  <rect width="200" height="140" fill="#e8f5e9"/>
                  <rect x="30" y="20" width="140" height="80" rx="6" fill="#81c784" opacity="0.5"/>
                  <text x="100" y="68" text-anchor="middle" fill="#1b5e20" font-size="10" font-family="Inter,sans-serif" font-weight="600">AZITHROMYCIN</text>
                  <text x="100" y="82" text-anchor="middle" fill="#1b5e20" font-size="9" font-family="Inter,sans-serif">500mg Tablets</text>
                </svg>
              </div>
            </div>
            <div class="product-card-body">
              <h4 class="product-name">AZITHROMYCIN Tablets</h4>
              <a href="#" class="product-link">View Product &#8594;</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-img">
              <img src="assets/calvita.png" alt="Calvita Supplement" loading="lazy" width="200" height="140"
                onerror="this.style.display='none';this.nextElementSibling.style.display='flex'"/>
              <div class="product-img-fallback" style="display:none">
                <svg viewBox="0 0 200 140" xmlns="http://www.w3.org/2000/svg" width="200" height="140">
                  <rect width="200" height="140" fill="#e3f2fd"/>
                  <rect x="40" y="15" width="120" height="90" rx="6" fill="#64b5f6" opacity="0.5"/>
                  <text x="100" y="65" text-anchor="middle" fill="#0d47a1" font-size="14" font-family="Inter,sans-serif" font-weight="700">CALVITA</text>
                  <text x="100" y="82" text-anchor="middle" fill="#0d47a1" font-size="9" font-family="Inter,sans-serif">Ca 500mg / Vit D3 200IU</text>
                </svg>
              </div>
            </div>
            <div class="product-card-body">
              <h4 class="product-name">CALVITA</h4>
              <a href="#" class="product-link">View Product &#8594;</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-img">
              <div class="product-img-fallback" style="display:flex">
                <svg viewBox="0 0 200 140" xmlns="http://www.w3.org/2000/svg" width="200" height="140">
                  <rect width="200" height="140" fill="#fff3e0"/>
                  <ellipse cx="100" cy="70" rx="50" ry="30" fill="#ffb74d" opacity="0.6"/>
                  <text x="100" y="74" text-anchor="middle" fill="#e65100" font-size="12" font-family="Inter,sans-serif" font-weight="600">AMOXICILLIN</text>
                </svg>
              </div>
            </div>
            <div class="product-card-body">
              <h4 class="product-name">AMOXICILLIN Capsules</h4>
              <a href="#" class="product-link">View Product &#8594;</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-card-img">
              <div class="product-img-fallback" style="display:flex">
                <svg viewBox="0 0 200 140" xmlns="http://www.w3.org/2000/svg" width="200" height="140">
                  <rect width="200" height="140" fill="#fce4ec"/>
                  <rect x="60" y="25" width="80" height="90" rx="8" fill="#f48fb1" opacity="0.7"/>
                  <text x="100" y="72" text-anchor="middle" fill="#880e4f" font-size="11" font-family="Inter,sans-serif" font-weight="600">METFORMIN</text>
                  <text x="100" y="86" text-anchor="middle" fill="#880e4f" font-size="9" font-family="Inter,sans-serif">500mg Tablets</text>
                </svg>
              </div>
            </div>
            <div class="product-card-body">
              <h4 class="product-name">METFORMIN Tablets</h4>
              <a href="#" class="product-link">View Product &#8594;</a>
            </div>
          </article>

        </div>

        <div class="range-cta">
          <a href="#" class="btn btn-primary">View Full Portfolio</a>
        </div>
      </div>
    </section>

  </main>
  <?php include 'footer.php'; ?>


  
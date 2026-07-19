<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Tigremed Pharma Co Ltd — Uganda-focused pharmaceutical market access, distribution and healthcare supply chain company." />
  <meta name="keywords" content="pharmaceutical, Uganda, medicines, healthcare, Tigremed" />
  <title>Tigremed Pharma Co Ltd | Enhancing Patients' Lives</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- ═══════════════ HEADER ═══════════════ -->
  <header class="site-header" id="site-header">
    <div class="header-top" id="header-top">
      <div class="header-top-content">
        <div class="header-contact-info">
          <div class="contact-item">
            <i class="fas fa-phone"></i>
            <span>+256 700 317380</span>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope"></i>
            <span>info@tigeremedpharma.com</span>
          </div>
        </div>
        <div class="social-icons">
          <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
          <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" title="Facebook"><i class="fab fa-facebook"></i></a>
        </div>
      </div>
    </div>

    <div class="header-inner">

      <!-- Logo -->
      <a href="index.php" class="logo" aria-label="Tigremed Pharma Home">
        <img src="assets/logo.svg" alt="Tigremed Pharma" />
      </a>

      <!-- Desktop nav — centred between logo and CTA -->
      <nav class="main-nav" id="main-nav" role="navigation" aria-label="Main navigation">
        <ul class="nav-list">

          <li><a href="index.php" class="nav-link active">Home</a></li>

          <li class="has-dropdown">
            <a href="#" class="nav-link">
              About Us <span class="arrow">&#9660;</span>
            </a>
            <ul class="dropdown">
              <li><a href="#">Our Journey</a></li>
              <li><a href="#">Board of Directors</a></li>
              <li><a href="#">Leadership</a></li>
            </ul>
          </li>

          <li class="has-dropdown">
            <a href="products.php" class="nav-link">
              Products <span class="arrow">&#9660;</span>
            </a>
            <ul class="dropdown">
              <li><a href="products.php">Top Products</a></li>
              <li><a href="products.php">Product Portfolio</a></li>
            </ul>
          </li>

          <li class="has-dropdown">
            <a href="services.php" class="nav-link">
              Services <span class="arrow">&#9660;</span>
            </a>
            <ul class="dropdown">
              <li><a href="services.php">Distribution</a></li>
              <li><a href="services.php">Supply Chain</a></li>
              <li><a href="services.php">Market Access</a></li>
            </ul>
          </li>

          <li><a href="#" class="nav-link">Partners</a></li>

        </ul>
      </nav>

      <!-- Right side: CTA + hamburger -->
      <div class="header-actions">
        <a href="contact.php" class="btn btn-primary header-cta">Connect with Us</a>

        <!-- Mobile hamburger (visible ≤900px) -->
        <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>

    </div>
  </header>

  <!-- Mobile nav overlay -->
  <nav class="mobile-nav" id="mobile-nav" aria-hidden="true">
    <ul class="mobile-nav-list">
      <li><a href="index.php" class="mobile-link active">Home</a></li>
      <li><a href="#" class="mobile-link">About Us</a></li>
      <li><a href="products.php" class="mobile-link">Products</a></li>
      <li><a href="services.php" class="mobile-link">Services</a></li>
      <li><a href="#" class="mobile-link">Partners</a></li>
      <li><a href="contact.php" class="mobile-link contact-mobile">Connect with Us</a></li>
    </ul>
  </nav>

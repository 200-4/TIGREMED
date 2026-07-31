<?php
  $productSlug = isset($_GET['product']) ? strtolower(trim($_GET['product'])) : 'progermila';
  $productSlug = preg_replace('/[^a-z0-9_-]+/', '', $productSlug);

  $products = array(
    'progermila' => array(
      'eyebrow' => 'Lonza Pharma Products',
      'title' => 'Progermila',
      'subtitle' => 'Product Name',
      'image' => 'assets/Progermila.png',
      'alt' => 'Progermila probiotic sachets and box',
      'sections' => array(
        array('key' => 'composition', 'label' => 'Composition', 'heading' => 'Composition', 'body' => 'Each sachet contains a multi-strain probiotic blend with prebiotic fibre, formulated to support healthy gut flora balance.'),
        array('key' => 'dosage', 'label' => 'Dosage Form', 'heading' => 'Dosage Form', 'body' => 'Oral sachets / single-dose vials, dissolved or taken directly as directed by a healthcare provider.'),
      )
    ),
    'venocid' => array(
      'eyebrow' => 'Therapeutic Care',
      'title' => 'Venocid',
      'subtitle' => 'Product Name',
      'image' => 'assets/venocid.png',
      'alt' => 'Venocid product presentation',
      'sections' => array(
        array('key' => 'composition', 'label' => 'Composition', 'heading' => 'Composition', 'body' => 'A targeted formulation designed to support patient care with clinically aligned dosing and administration guidance.'),
        array('key' => 'dosage', 'label' => 'Dosage Form', 'heading' => 'Dosage Form', 'body' => 'Available in a patient-friendly oral format with clear dosing instructions for healthcare professionals.'),
      )
    ),
    'inflagic' => array(
      'eyebrow' => 'Oral Solution',
      'title' => 'Inflagic Oral Solution',
      'subtitle' => 'Product Name',
      'image' => 'assets/inflagic_oral solution.png',
      'alt' => 'Inflagic oral solution packaging',
      'sections' => array(
        array('key' => 'composition', 'label' => 'Composition', 'heading' => 'Composition', 'body' => 'A liquid-based formulation developed for dependable delivery in pediatric and outpatient care settings.'),
        array('key' => 'dosage', 'label' => 'Dosage Form', 'heading' => 'Dosage Form', 'body' => 'Liquid oral solution designed for accurate dosing and ease of administration.'),
      )
    ),
    'hantacid' => array(
      'eyebrow' => 'Digestive Support',
      'title' => 'Hantacid',
      'subtitle' => 'Product Name',
      'image' => 'assets/Hantacid.png',
      'alt' => 'Hantacid digestive support product',
      'sections' => array(
        array('key' => 'composition', 'label' => 'Composition', 'heading' => 'Composition', 'body' => 'A digestive support product formulated to help address common symptoms linked to gastric discomfort and acidity.'),
        array('key' => 'dosage', 'label' => 'Dosage Form', 'heading' => 'Dosage Form', 'body' => 'Available in easy-to-use oral dosage format with practical administration guidance.'),
      )
    )
  );

  $product = isset($products[$productSlug]) ? $products[$productSlug] : $products['progermila'];
?>
<?php include 'header.php'; ?>

<main>
  <section class="product-banner product-banner--<?php echo htmlspecialchars($productSlug, ENT_QUOTES); ?>">
    <div class="banner-content">
      <span class="banner-eyebrow"><?php echo htmlspecialchars($product['eyebrow'], ENT_QUOTES); ?></span>
      <h1 class="banner-title"><?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?></h1>
      <p class="banner-subtitle"><?php echo htmlspecialchars($product['subtitle'], ENT_QUOTES); ?></p>
    </div>
  </section>

  <section class="product-detail">
    <div class="product-image-card">
      <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES); ?>" alt="<?php echo htmlspecialchars($product['alt'], ENT_QUOTES); ?>" />
    </div>

    <div class="product-info-card">
      <h2 class="product-name"><?php echo htmlspecialchars($product['title'], ENT_QUOTES); ?></h2>

      <div class="accordion" id="productAccordion">
        <?php foreach ($product['sections'] as $section): ?>
          <div class="accordion-item<?php echo !empty($section['open']) ? ' is-open' : ''; ?>" data-item="<?php echo htmlspecialchars($section['key'], ENT_QUOTES); ?>">
            <button class="accordion-trigger" data-key="<?php echo htmlspecialchars($section['key'], ENT_QUOTES); ?>" aria-expanded="<?php echo !empty($section['open']) ? 'true' : 'false'; ?>">
              <span><?php echo htmlspecialchars($section['label'], ENT_QUOTES); ?></span>
              <span class="chevron">▾</span>
            </button>
            <div class="accordion-panel">
              <h4><?php echo htmlspecialchars($section['heading'], ENT_QUOTES); ?></h4>
              <p><?php echo $section['body']; ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="product-actions">
        <a class="btn btn-primary" href="contact.php">Contact Us</a>
        <a class="btn btn-outline" href="index.php#products">Back to Products</a>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>

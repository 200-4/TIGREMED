<?php
header('Content-Type: application/xml; charset=utf-8');

// Same domain used in schema-organization.html and product-details.php —
// keep these in sync.
$siteUrl = 'https://tigremedpharma.com';

// Same product list as product-details.php. If you move $products into a
// shared include later, replace this block with a require of that file
// instead of duplicating it — for now it's kept in sync manually.
$productSlugs = array('progermila', 'venocid', 'inflagic', 'hantacid');

$staticPages = array(
  array('path' => 'index.php', 'freq' => 'weekly', 'priority' => '1.0'),
  array('path' => 'about-us.php', 'freq' => 'monthly', 'priority' => '0.7'),
  array('path' => 'products.php', 'freq' => 'weekly', 'priority' => '0.9'),
  array('path' => 'services.php', 'freq' => 'monthly', 'priority' => '0.7'),
  array('path' => 'partners.php', 'freq' => 'monthly', 'priority' => '0.6'),
  array('path' => 'contact.php', 'freq' => 'yearly', 'priority' => '0.5'),
);

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($staticPages as $page) {
  echo "  <url>\n";
  echo "    <loc>" . htmlspecialchars($siteUrl . '/' . $page['path'], ENT_QUOTES) . "</loc>\n";
  echo "    <changefreq>" . $page['freq'] . "</changefreq>\n";
  echo "    <priority>" . $page['priority'] . "</priority>\n";
  echo "  </url>\n";
}

foreach ($productSlugs as $slug) {
  echo "  <url>\n";
  echo "    <loc>" . htmlspecialchars($siteUrl . '/product-details.php?product=' . $slug, ENT_QUOTES) . "</loc>\n";
  echo "    <changefreq>monthly</changefreq>\n";
  echo "    <priority>0.8</priority>\n";
  echo "  </url>\n";
}

echo '</urlset>' . "\n";
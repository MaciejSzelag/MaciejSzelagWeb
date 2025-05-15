<!DOCTYPE html>
<html lang="en">
<?php
    $homePage;
    if (isset($homePage)) {
        include 'config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
    } else {
        include '../config/config.php'; // Relatywna ścieżka do pliku konfiguracyjnego
    }
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://maciejszelag.co.uk">

    <!-- Authorship -->
    <meta name="author" content="Maciej Szelag">
    <meta name="robots" content="index, follow">
    <!-- Primary Meta Tags -->
    <title>
        <?php echo 'Maciej Szelag |' . $title . '| Professional Web Design & Development in Plymouth, UK' ?? 'Maciej Szelag | Professional Web Design & Development in Plymouth, UK'; ?>
    </title>

    <meta name="description"
        content="Plymouth-based web designer & developer creating fast, mobile-friendly websites for businesses. Custom solutions. 100% satisfaction guarantee.">
    <meta name="keywords"
        content="web design Plymouth, web developer Plymouth, responsive websites, UK web design, freelance web developer">

    <meta name="theme-color" content="#343434">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_GB">

    <?php
        // Pobierz podstawowy URL
        $canonicalUrl = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        // Usuń parametry śledzenia (opcjonalne)
        $paramsToRemove = ['utm_source', 'utm_medium', 'utm_campaign', 'fbclid', 'gclid'];
        $canonicalUrl   = preg_replace('/\?(' . implode('|', $paramsToRemove) . ')=[^&]+(&|$)/', '?', $canonicalUrl);
        $canonicalUrl   = str_replace('?&', '?', $canonicalUrl);
        $canonicalUrl   = rtrim($canonicalUrl, '?');

        // Usuń duplikaty ukośników
        $canonicalUrl = preg_replace('/([^:])\/{2,}/', '$1/', $canonicalUrl);

        // Wyświetl canonical
        echo '<link rel="canonical" href="' . htmlspecialchars($canonicalUrl) . '" />';
    ?>
    <meta property="og:url" content="https://maciejszelag.co.uk">
    <meta property="og:title" content="Maciej Szelag | Web Design & Development in Plymouth">
    <meta property="og:description"
        content="Professional web design services in Plymouth. Custom websites that convert visitors into customers.">
    <meta property="og:image" content="https://maciejszelag.co.uk/images/social-preview.jpg">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@mswebdesignuk">
    <meta name="twitter:creator" content="@mswebdesignuk">
    <meta name="twitter:title" content="Maciej Szelag | Web Design & Development in Plymouth">
    <meta name="twitter:description"
        content="Plymouth web designer creating fast, responsive business websites with 100% satisfaction guarantee.">
    <meta name="twitter:image" content="https://maciejszelag.co.uk/images/social-preview.jpg">

    <!-- Apple/Safari Meta Tags
    <meta name="apple-mobile-web-app-title" content="MS Web Design">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->

    <link rel="stylesheet" href="<?php $cssPath;if (isset($cssPath)) {
                                         echo "css/style.min.css";
                                     } else {
                                         echo "../css/style.min.css";
                                 }
                                 ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Julius+Sans+One&display=swap"
        rel="stylesheet">


    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "ProfessionalService",
          "name": "Maciej Szelag Web Design",
          "image": "https://maciejszelag.co.uk/images/MS-logo-500x500.jpg",
          "@id": "https://maciejszelag.co.uk",
          "url": "https://maciejszelag.co.uk",
          "priceRange": "££",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "159 Granby Street",
            "addressLocality": "Plymouth",
            "postalCode": "PL1 4BL",
            "addressCountry": "UK"
          },
          "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
            ],
            "opens": "09:00",
            "closes": "17:00"
          },
          "sameAs": [
            "https://www.facebook.com/profile.php?id=61574904818271",
            "https://www.instagram.com/mswebdesignuk/"
          ]
        }
        </script>
</head>
<body>
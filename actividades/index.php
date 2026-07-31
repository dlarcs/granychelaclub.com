<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">

<head>

  <meta charset="UTF-8">

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >

  <meta
    http-equiv="content-language"
    content="es-CO"
  >

  <title>Actividades, Promociones y Eventos | Gran&Chela Club</title>

  <?php

  $base = rtrim(
    $_SERVER['DOCUMENT_ROOT'],
    '/'
  );

  $cssFile = $base . '/actividades/style.css';

  $cssVer = is_file($cssFile)
    ? filemtime($cssFile)
    : '';

  ?>

  <!-- ========================================
       SEO PRINCIPAL
  ========================================= -->

  <meta
    name="description"
    content="Conoce las actividades, promociones y eventos de Gran&Chela Club en Chapinero Central, Bogotá. Disfruta noches de karaoke, salsa, promociones en bebidas, fiestas especiales y reserva tu celebración."
  >

  <meta
    name="keywords"
    content="Gran&Chela Club, actividades en Chapinero, promociones de bar, eventos en Chapinero, karaoke Bogotá, salsa en Chapinero, discoteca Bogotá, fiestas, promociones de bebidas, cumpleaños, reservas, Chapinero Central"
  >

  <meta
    name="robots"
    content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1"
  >

  <meta
    name="googlebot"
    content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1"
  >

  <link
    rel="canonical"
    href="https://granychelaclub.com/actividades/"
  >

  <meta
    name="theme-color"
    content="#111111"
  >

  <!-- ========================================
       OPEN GRAPH
       WhatsApp / Facebook
  ========================================= -->

  <meta
    property="og:type"
    content="website"
  >

  <meta
    property="og:locale"
    content="es_CO"
  >

  <meta
    property="og:site_name"
    content="Gran&Chela Club"
  >

  <meta
    property="og:title"
    content="Actividades, Promociones y Eventos | Gran&Chela Club"
  >

  <meta
    property="og:description"
    content="Descubre nuestras noches de karaoke, salsa, promociones en bebidas, fiestas especiales y eventos en Gran&Chela Club, Chapinero Central."
  >

  <meta
    property="og:url"
    content="https://granychelaclub.com/actividades/"
  >

  <meta
    property="og:image"
    content="https://granychelaclub.com/img/logo.jpg"
  >

  <meta
    property="og:image:secure_url"
    content="https://granychelaclub.com/img/logo.jpg"
  >

  <meta
    property="og:image:type"
    content="image/jpeg"
  >

  <meta
    property="og:image:width"
    content="1200"
  >

  <meta
    property="og:image:height"
    content="630"
  >

  <meta
    property="og:image:alt"
    content="Actividades, promociones y eventos de Gran&Chela Club"
  >

  <!-- ========================================
       TWITTER / X
  ========================================= -->

  <meta
    name="twitter:card"
    content="summary_large_image"
  >

  <meta
    name="twitter:title"
    content="Actividades, Promociones y Eventos | Gran&Chela Club"
  >

  <meta
    name="twitter:description"
    content="Karaoke, salsa, fiestas, promociones en bebidas y eventos especiales en Gran&Chela Club, Chapinero Central, Bogotá."
  >

  <meta
    name="twitter:image"
    content="https://granychelaclub.com/img/logo.jpg"
  >

  <meta
    name="twitter:image:alt"
    content="Gran&Chela Club en Chapinero Central"
  >

  <!-- ========================================
       ICONOS
  ========================================= -->

  <link
    rel="icon"
    type="image/jpeg"
    href="/img/logo.jpg"
  >

  <link
    rel="apple-touch-icon"
    href="/img/logo.jpg"
  >

  <!-- ========================================
       CSS
  ========================================= -->

  <link
    rel="stylesheet"
    href="style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>"
  >

  <!-- ========================================
       DATOS ESTRUCTURADOS
  ========================================= -->

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebSite",
        "@id": "https://granychelaclub.com/#website",
        "url": "https://granychelaclub.com/",
        "name": "Gran&Chela Club",
        "description": "Bar, discoteca y espacio para eventos en Chapinero Central, Bogotá.",
        "inLanguage": "es-CO"
      },
      {
        "@type": "NightClub",
        "@id": "https://granychelaclub.com/#business",
        "name": "Gran&Chela Club",
        "url": "https://granychelaclub.com/",
        "image": "https://granychelaclub.com/img/logo.jpg",
        "logo": "https://granychelaclub.com/img/logo.jpg",
        "description": "Gran&Chela Club es un bar, discoteca y espacio para eventos ubicado en Chapinero Central, Bogotá. Ofrece actividades, noches de karaoke, música salsa, promociones en bebidas, fiestas especiales y reservas para celebraciones.",
        "telephone": "+573224680419",
        "priceRange": "$$",
        "acceptsReservations": true,
        "servesCuisine": [
          "Bebidas",
          "Coctelería"
        ],
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Chapinero Central",
          "addressRegion": "Bogotá D.C.",
          "addressCountry": "CO"
        },
        "areaServed": {
          "@type": "City",
          "name": "Bogotá"
        },
        "amenityFeature": [
          {
            "@type": "LocationFeatureSpecification",
            "name": "Karaoke",
            "value": true
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Música salsa",
            "value": true
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Promociones en bebidas",
            "value": true
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Eventos especiales",
            "value": true
          },
          {
            "@type": "LocationFeatureSpecification",
            "name": "Reservas para celebraciones",
            "value": true
          }
        ]
      },
      {
        "@type": "CollectionPage",
        "@id": "https://granychelaclub.com/actividades/#page",
        "url": "https://granychelaclub.com/actividades/",
        "name": "Actividades, Promociones y Eventos",
        "description": "Página de actividades, promociones, fiestas y eventos de Gran&Chela Club.",
        "inLanguage": "es-CO",
        "isPartOf": {
          "@id": "https://granychelaclub.com/#website"
        },
        "about": {
          "@id": "https://granychelaclub.com/#business"
        },
        "primaryImageOfPage": {
          "@type": "ImageObject",
          "url": "https://granychelaclub.com/img/logo.jpg"
        }
      }
    ]
  }
  </script>

</head>

<body>

  <?php include "../global/pag_nav/pag_nav.php"; ?>

  <main class="container_actividad">

    <?php include "actividades/actividades.php"; ?>

  </main>

  <?php include "../global/boton/boton.php"; ?>

  <?php include "../global/pag_footer/pag_footer.php"; ?>

  <a class="whatsapp-fab"
    href="https://wa.me/573224680419?text=Hola%20vengo%20desde%20la%20web%20de%20Gran%26Chela%20Club%20y%20quiero%20mas%20información"
    target="_blank" rel="noopener"
    aria-label="Chatear por WhatsApp">
    <img src="global/img/img_whatsApp.png"
      alt="Contactar a Gran&Chela Club por WhatsApp" decoding="async">
  </a>

</body>

</html>

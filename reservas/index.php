<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta http-equiv="content-language" content="es-CO">

	<title>Reservas y Eventos | Gran&Chela Club</title>

	<?php

  $base = rtrim(
    $_SERVER['DOCUMENT_ROOT'],
    '/'
  );

  $cssFile = $base . '/reservas/style.css';

  $cssVer = is_file($cssFile)
    ? filemtime($cssFile)
    : '';

  ?>

		<!-- ========================================
       SEO PRINCIPAL
  ========================================= -->

		<meta name="description" content="Reserva tu mesa, cumpleaños, celebración o evento en Gran&Chela Club, bar y discoteca en Chapinero Central, Bogotá. Consulta disponibilidad y organiza una noche especial.">

		<meta name="keywords" content="reservas Gran&Chela Club, reservar mesa en Chapinero, eventos en Bogotá, cumpleaños en discoteca, celebraciones, fiestas privadas, reservas de bar, discoteca Chapinero, eventos empresariales">

		<meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

		<meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

		<link rel="canonical" href="https://granychelaclub.com/reservas/">

		<meta name="theme-color" content="#111111">

		<!-- ========================================
       OPEN GRAPH
       WhatsApp / Facebook
  ========================================= -->

		<meta property="og:type" content="website">

		<meta property="og:locale" content="es_CO">

		<meta property="og:site_name" content="Gran&Chela Club">

		<meta property="og:title" content="Reservas y Eventos | Gran&Chela Club">

		<meta property="og:description" content="Reserva mesas, cumpleaños, celebraciones y eventos especiales en Gran&Chela Club, bar y discoteca en Chapinero Central, Bogotá.">

		<meta property="og:url" content="https://granychelaclub.com/reservas/">

		<meta property="og:image" content="https://granychelaclub.com/img/logo.jpg">

		<meta property="og:image:secure_url" content="https://granychelaclub.com/img/logo.jpg">

		<meta property="og:image:type" content="image/jpeg">

		<meta property="og:image:width" content="1200">

		<meta property="og:image:height" content="630">

		<meta property="og:image:alt" content="Reservas y eventos en Gran&Chela Club">

		<!-- ========================================
       TWITTER / X
  ========================================= -->

		<meta name="twitter:card" content="summary_large_image">

		<meta name="twitter:title" content="Reservas y Eventos | Gran&Chela Club">

		<meta name="twitter:description" content="Reserva tu mesa, cumpleaños, celebración o evento privado en Gran&Chela Club, Chapinero Central, Bogotá.">

		<meta name="twitter:image" content="https://granychelaclub.com/img/logo.jpg">

		<meta name="twitter:image:alt" content="Gran&Chela Club en Chapinero Central">

		<!-- ========================================
       ICONOS
  ========================================= -->

		<link rel="icon" type="image/jpeg" href="/img/logo.jpg">

		<link rel="apple-touch-icon" href="/img/logo.jpg">

		<!-- ========================================
       CSS
  ========================================= -->

		<link rel="stylesheet" href="style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

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
			        "description": "Gran&Chela Club es un bar, discoteca y espacio para eventos en Chapinero Central, Bogotá. Permite reservar mesas, cumpleaños, celebraciones, fiestas privadas y eventos empresariales.",
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
			            "name": "Reserva de mesas",
			            "value": true
			          },
			          {
			            "@type": "LocationFeatureSpecification",
			            "name": "Cumpleaños",
			            "value": true
			          },
			          {
			            "@type": "LocationFeatureSpecification",
			            "name": "Celebraciones especiales",
			            "value": true
			          },
			          {
			            "@type": "LocationFeatureSpecification",
			            "name": "Eventos privados",
			            "value": true
			          },
			          {
			            "@type": "LocationFeatureSpecification",
			            "name": "Eventos empresariales",
			            "value": true
			          }
			        ]
			      },
			      {
			        "@type": "WebPage",
			        "@id": "https://granychelaclub.com/reservas/#page",
			        "url": "https://granychelaclub.com/reservas/",
			        "name": "Reservas y Eventos",
			        "description": "Página para consultar y solicitar reservas de mesas, cumpleaños, celebraciones y eventos en Gran&Chela Club.",
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
			        },
			        "potentialAction": {
			          "@type": "ReserveAction",
			          "target": {
			            "@type": "EntryPoint",
			            "urlTemplate": "https://granychelaclub.com/reservas/",
			            "inLanguage": "es-CO",
			            "actionPlatform": [
			              "https://schema.org/DesktopWebPlatform",
			              "https://schema.org/MobileWebPlatform"
			            ]
			          },
			          "result": {
			            "@type": "Reservation",
			            "name": "Solicitud de reserva en Gran&Chela Club"
			          }
			        }
			      }
			    ]
			  }

		</script>

</head>

<body>

	<?php include "../global/pag_nav/pag_nav.php"; ?>

	<main class="container_reservas">

		<?php include "reservas/reservas.php"; ?>

	</main>

	<?php include "../global/boton/boton.php"; ?>

	<?php include "../global/pag_footer/pag_footer.php"; ?>

	<a class="whatsapp-fab" href="https://wa.me/573224680419?text=Hola%2C%20vengo%20desde%20la%20p%C3%A1gina%20web%20de%20Gran%26Chela%20Club%20y%20quiero%20hacer%20una%20reserva." target="_blank" rel="noopener noreferrer" aria-label="Reservar en Gran&Chela Club por WhatsApp">

		<img src="../global/img/img_whatsApp.png" alt="Contactar a Gran&Chela Club para realizar una reserva" loading="lazy" decoding="async">

	</a>

</body>

</html>

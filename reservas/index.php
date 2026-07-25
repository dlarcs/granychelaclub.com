<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">
  <title>Reservas | Gran&Chela Club</title>

  <!-- SEO principal -->
  <meta name="description" content="Reserva tu mesa o evento en Gran&Chela Club, bar y discoteca en Chapinero Central, Bogotá. Celebra cumpleaños, despedidas, reuniones, eventos empresariales y disfruta una experiencia inolvidable.">

  <meta name="keywords" content="Reservas Gran&Chela Club, reservar bar Bogotá, reservar discoteca Chapinero, cumpleaños, eventos privados, fiestas, reuniones empresariales, mesas VIP, Chapinero Central">

  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

  <link rel="canonical" href="https://granychelaclub.com/reservas/">

  <meta name="theme-color" content="#111111">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Gran&Chela Club">
  <meta property="og:title" content="Reservas | Gran&Chela Club">
  <meta property="og:description" content="Reserva tu mesa o evento en Gran&Chela Club y vive una noche inolvidable en uno de los mejores bares y discotecas de Chapinero Central.">

  <meta property="og:url" content="https://granychelaclub.com/reservas/">

  <meta property="og:image" content="https://granychelaclub.com/img/logo.jpg">
  <meta property="og:image:secure_url" content="https://granychelaclub.com/img/logo.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Reservas | Gran&Chela Club">
  <meta name="twitter:description" content="Reserva mesas, celebraciones, cumpleaños y eventos privados en Gran&Chela Club, Chapinero Central, Bogotá.">
  <meta name="twitter:image" content="https://granychelaclub.com/img/logo.jpg">

  <!-- Iconos -->
  <link rel="icon" href="/bar/Gran&Chela_Club/img/logo.jpg">
  <link rel="icon" type="image/jpeg" href="/bar/Gran&Chela_Club/img/logo.jpg">
  <link rel="apple-touch-icon" href="/bar/Gran&Chela_Club/img/logo.jpg">

  <!-- CSS -->
  <link rel="stylesheet" href="../reservas/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

  <!-- Datos estructurados -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@graph":[
      {
        "@type":"WebSite",
        "@id":"https://granychelaclub.com/#website",
        "url":"https://granychelaclub.com/",
        "name":"Gran&Chela Club",
        "description":"Bar, discoteca y lugar para eventos en Chapinero Central, Bogotá.",
        "inLanguage":"es-CO"
      },
      {
        "@type":"BarOrPub",
        "@id":"https://granychelaclub.com/#business",
        "name":"Gran&Chela Club",
        "url":"https://granychelaclub.com/",
        "image":"https://granychelaclub.com/img/logo.jpg",
        "description":"Gran&Chela Club es un bar y discoteca en Chapinero Central donde puedes reservar mesas VIP, celebrar cumpleaños, organizar despedidas, eventos empresariales, reuniones y fiestas privadas.",
        "telephone":"+57 322 468 0419",
        "priceRange":"$$",
        "acceptsReservations":true,
        "address":{
          "@type":"PostalAddress",
          "addressLocality":"Chapinero Central",
          "addressRegion":"Bogotá D.C.",
          "addressCountry":"CO"
        }
      },
      {
        "@type":"ReservationService",
        "name":"Reservas Gran&Chela Club",
        "provider":{
          "@type":"BarOrPub",
          "name":"Gran&Chela Club"
        },
        "areaServed":"Bogotá D.C.",
        "availableChannel":{
          "@type":"ServiceChannel",
          "serviceUrl":"https://granychelaclub.com/reservas/",
          "servicePhone":{
            "@type":"ContactPoint",
            "telephone":"+57 322 468 0419"
          }
        }
      }
    ]
  }
  </script>

</head>
<body>

  <?php include "../global/pag_nav/pag_nav.php" ?>
  <div class="container_reservas">
    <?php include "../reservas/reservas/reservas.php" ?>
  </div>
  <?php include "../global/boton/boton.php" ?>


  <?php include "../global/pag_footer/pag_footer.php" ?>
  <a class="whatsapp-fab"
		href="https://wa.me/573224680419?text=Hola%20vengo%20desde%20la%20web%20de%20Bar%20Restaurant"
		target="_blank" rel="noopener"
		aria-label="Chatear por WhatsApp" >
		<img src="../global/img/img_whatsApp.png"
		 alt="Contactar por WhatsApp" decoding="async">
	</a>
</body>

</html>

<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">

  <title>Actividades y Promociones | Gran&Chela Club</title>

  <!-- SEO principal -->
  <meta name="description" content="Descubre las actividades, promociones, eventos y fiestas de Gran&Chela Club en Chapinero Central, Bogotá. Reserva cumpleaños, celebraciones, eventos empresariales y vive las mejores noches con música, cocteles y el mejor ambiente.">

  <meta name="keywords" content="Gran&Chela Club, bar Chapinero, discoteca Bogotá, promociones, happy hour, eventos, fiestas, cumpleaños, reservas, rumba Bogotá, Chapinero Central">

  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

  <link rel="canonical" href="https://granychelaclub.com/actividades/">

  <meta name="theme-color" content="#111111">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Gran&Chela Club">
  <meta property="og:title" content="Actividades y Promociones | Gran&Chela Club">
  <meta property="og:description" content="Conoce nuestras promociones, eventos especiales, fiestas temáticas y reserva tu celebración en Gran&Chela Club, el punto de encuentro en Chapinero Central.">

  <meta property="og:url" content="https://granychelaclub.com/actividades/">

  <meta property="og:image" content="https://granychelaclub.com/img/logo.jpg">
  <meta property="og:image:secure_url" content="https://granychelaclub.com/img/logo.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Actividades y Promociones | Gran&Chela Club">
  <meta name="twitter:description" content="Eventos, promociones, fiestas y reservas en Gran&Chela Club. Vive la mejor experiencia nocturna en Chapinero Central, Bogotá.">
  <meta name="twitter:image" content="https://granychelaclub.com/img/logo.jpg">

  <!-- Iconos -->
  <link rel="icon" href="/bar/Gran&Chela_Club/img/logo.jpg">
  <link rel="icon" type="image/jpeg" href="/bar/Gran&Chela_Club/img/logo.jpg">
  <link rel="apple-touch-icon" href="/bar/Gran&Chela_Club/img/logo.jpg">

  <!-- CSS -->
  <link rel="stylesheet" href="../actividades/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

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
        "description":"Gran&Chela Club es un bar y discoteca ubicado en Chapinero Central, Bogotá. Disfruta promociones, música en vivo, fiestas temáticas, cocteles, licores premium y reserva espacios para cumpleaños, celebraciones y eventos empresariales.",
        "telephone":"+57 322 468 0419",
        "servesCuisine":"Bebidas, Coctelería",
        "priceRange":"$$",
        "address":{
          "@type":"PostalAddress",
          "addressLocality":"Chapinero Central",
          "addressRegion":"Bogotá D.C.",
          "addressCountry":"CO"
        },
        "sameAs":[
          "https://www.instagram.com/",
          "https://www.facebook.com/"
        ]
      }
    ]
  }
  </script>

</head>
<body>

  <?php include "../global/pag_nav/pag_nav.php" ?>
  <div class="container_reservas">
    <?php include "../actividades/actividades/actividades.php" ?>

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

<!DOCTYPE html>
<html class="html_home" lang="es-CO" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-language" content="es-CO">
  <title>Galería | Gran&Chela Club</title>

  <!-- SEO principal -->
  <meta name="description" content="Explora la galería de Gran&Chela Club en Chapinero Central, Bogotá. Descubre nuestros espacios, ambiente, fiestas, eventos, cocteles, música en vivo y las mejores noches de rumba.">

  <meta name="keywords" content="Gran&Chela Club, galería, fotos bar, discoteca Bogotá, Chapinero Central, eventos, fiestas, cocteles, reservas, rumba Bogotá">

  <meta name="robots" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">
  <meta name="googlebot" content="index,follow,max-image-preview:large,max-snippet:-1,max-video-preview:-1">

  <link rel="canonical" href="https://granychelaclub.com/galeria/">

  <meta name="theme-color" content="#111111">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Gran&Chela Club">
  <meta property="og:title" content="Galería | Gran&Chela Club">
  <meta property="og:description" content="Conoce el ambiente, las instalaciones, las fiestas y los mejores momentos de Gran&Chela Club a través de nuestra galería de imágenes.">

  <meta property="og:url" content="https://granychelaclub.com/galeria/">

  <meta property="og:image" content="https://granychelaclub.com/img/general18.jpg">
  <meta property="og:image:secure_url" content="https://granychelaclub.com/img/general18.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Galería | Gran&Chela Club">
  <meta name="twitter:description" content="Descubre el ambiente, las fiestas, eventos y experiencias que hacen de Gran&Chela Club uno de los mejores lugares para disfrutar la vida nocturna en Chapinero Central.">
  <meta name="twitter:image" content="https://granychelaclub.com/img/general18.jpg">

  <!-- Iconos -->
  <link rel="icon" href="/img/general18.jpg">
  <link rel="icon" type="image/jpeg" href="/img/general18.jpg">
  <link rel="apple-touch-icon" href="/img/general18.jpg">

  <!-- CSS -->
  <link rel="stylesheet" href="../galeria/style.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

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
        "@type":"ImageGallery",
        "@id":"https://granychelaclub.com/galeria/#gallery",
        "name":"Galería Gran&Chela Club",
        "url":"https://granychelaclub.com/galeria/",
        "description":"Galería de imágenes de Gran&Chela Club donde podrás conocer el ambiente, la decoración, los eventos, las fiestas, los cocteles y las experiencias que ofrece nuestro bar y discoteca.",
        "image":"https://granychelaclub.com/img/general18.jpg",
        "about":{
          "@type":"BarOrPub",
          "name":"Gran&Chela Club",
          "address":{
            "@type":"PostalAddress",
            "addressLocality":"Chapinero Central",
            "addressRegion":"Bogotá D.C.",
            "addressCountry":"CO"
          }
        }
      },
      {
        "@type":"BarOrPub",
        "@id":"https://granychelaclub.com/#bar",
        "name":"Gran&Chela Club",
        "url":"https://granychelaclub.com/",
        "image":"https://granychelaclub.com/img/general18.jpg",
        "description":"Gran&Chela Club es un bar y discoteca en Chapinero Central donde podrás disfrutar de música, cocteles, fiestas temáticas, eventos privados y un ambiente único para celebrar cualquier ocasión.",
        "telephone":"+57 322 468 0419",
        "priceRange":"$$",
        "address":{
          "@type":"PostalAddress",
          "addressLocality":"Chapinero Central",
          "addressRegion":"Bogotá D.C.",
          "addressCountry":"CO"
        }
      }
    ]
  }
  </script>

</head>
<body>

  <?php include "../global/pag_nav/pag_nav.php" ?>
  <div class="container_galeria">
    <?php include "../galeria/galeria/galeria.php" ?>

  </div>
  <?php include "../global/boton/boton.php" ?>

  <?php include "../global/pag_footer/pag_footer.php" ?>
  <a class="whatsapp-fab"
    href="https://wa.me/573224680419?text=Hola%20vengo%20desde%20la%20web%20de%20Gran%26Chela%20Club%20y%20quiero%20mas%20información"
    target="_blank" rel="noopener"
    aria-label="Chatear por WhatsApp">
    <img src="global/img/img_whatsApp.png"
      alt="Contactar a Gran&Chela Club por WhatsApp" decoding="async">
  </a>
</body>

</html>

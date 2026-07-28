<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/nav_gran/nav_gran.css';
$jsFile  = $base . '/home/nav_gran/nav_gran.js';

$cssVer = is_file($cssFile)
    ? filemtime($cssFile)
    : '';

$jsVer = is_file($jsFile)
    ? filemtime($jsFile)
    : '';
?>

<link
  rel="stylesheet"
  href="home/nav_gran/nav_gran.css<?= $cssVer ? '?v=' . $cssVer : '' ?>"
>

<link
  rel="preconnect"
  href="https://fonts.googleapis.com"
>

<link
  rel="preconnect"
  href="https://fonts.gstatic.com"
  crossorigin
>

<link
  href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap"
  rel="stylesheet"
>

<header class="gc-nav">

  <a
    href="index.php"
    class="gc-logo"
    aria-label="Ir al inicio de Gran y Chela Club"
  >
    <h1>Gran&amp;Chela Club</h1>
  </a>

  <div class="gc-actions">

    <!-- Search button
    <button
      class="gc-btn"
      type="button"
      aria-label="Buscar"
    >
      <span class="gc-search"></span>
    </button>
    -->

    <button
      class="gc-btn gc-toggle"
      type="button"
      aria-label="Abrir menú"
      aria-expanded="false"
      aria-controls="gc-menu"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>

  <nav
    id="gc-menu"
    class="gc-menu"
    aria-label="Menú principal"
  >
    <div class="gc-links">

      <a href="menu/index.php">
        Menú
      </a>

      <a href="galeria/index.php">
        Galería
      </a>

      <a href="reservas/index.php">
        Reservas
      </a>

      <a href="index.php#acerca_nosotros">
        Nosotros
      </a>

      <a href="index.php#redes_sociales">
        Redes sociales
      </a>

      <a href="index.php#ubicacion">
        Ubicación
      </a>

      <a
        href="https://wa.me/573224680419?text=Hola%2C%20vengo%20desde%20la%20web%20de%20Gran%26Chela%20Club"
        target="_blank"
        rel="noopener noreferrer"
      >
        Contáctanos
      </a>

    </div>
  </nav>

</header>

<script
  defer
  src="home/nav_gran/nav_gran.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"
></script>

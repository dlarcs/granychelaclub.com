<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/bar/Gran&Chela_Club/global/pag_nav/pag_nav.css';
$jsFile  = $base . '/bar/Gran&Chela_Club/global/pag_nav/pag_nav.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link
  rel="stylesheet"
  href="global/pag_nav/pag_nav.css<?= $cssVer ? '?v=' . $cssVer : '' ?>"
>
<header class="granchela-header">

  <a
    href="index.php"
    class="granchela-logo"
    aria-label="Ir al inicio"
  >
    <h1>Gran&amp;Chela Club</h1>
  </a>

  <div class="granchela-actions">

    <!--
    <button
      class="granchela-icon-button"
      type="button"
      aria-label="Buscar"
    >
      <span class="granchela-search-icon"></span>
    </button>
    -->

    <button
      class="granchela-icon-button granchela-menu-button"
      type="button"
      aria-label="Abrir menú"
      aria-expanded="false"
      aria-controls="granchela-menu"
    >
      <span></span>
      <span></span>
      <span></span>
    </button>

  </div>

  <nav
    id="granchela-menu"
    class="granchela-navigation"
    aria-label="Menú principal"
  >
    <div class="granchela-menu-content">

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
        href="https://wa.me/573224680419?text=Hola%20vengo%20desde%20la%20web%20de%20Gran%20y%20Chela%20Club"
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
  src="global/pag_nav/pag_nav.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"
></script>

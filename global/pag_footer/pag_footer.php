<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/global/pag_footer/pag_footer.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="../global/pag_footer/pag_footer.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<footer class="site-footer">
  <div class="footer-inner">

    <div class="footer-brand">
      <h1>Gran&Chela Club</h1>
      <p>Bar, club, discoteca y eventos</p>

      <div class="footer-social">
        <div class="social-links">

  <!-- Instagram -->
  <a
    href="https://www.instagram.com/granychela.club/"
    class="social-link"
    aria-label="Instagram"
    target="_blank"
    rel="noopener noreferrer"
  >
    <svg
      viewBox="0 0 24 24"
      aria-hidden="true"
    >
      <rect
        x="3"
        y="3"
        width="18"
        height="18"
        rx="5"
        ry="5"
      ></rect>

      <circle
        cx="12"
        cy="12"
        r="4"
      ></circle>

      <circle
        cx="17.5"
        cy="6.5"
        r="1"
        class="icon-dot"
      ></circle>
    </svg>
  </a>

  <!-- Facebook -->
  <a
    href="https://www.facebook.com/profile.php?id=61591409664220"
    class="social-link"
    aria-label="Facebook"
    target="_blank"
    rel="noopener noreferrer"
  >
    <svg
      viewBox="0 0 24 24"
      aria-hidden="true"
    >
      <path
        d="M14 8h3V4.5c-.6-.1-1.8-.2-3.2-.2-3.1 0-5.2 1.9-5.2 5.4V12H5v4h3.6v8h4.4v-8h3.5l.6-4H13V10c0-1.2.3-2 1-2z"
      ></path>
    </svg>
  </a>

</div>
      </div>
    </div>

    <div class="footer-col">
      <h5></h5>
      <a href="reservas/index.php">Reservas</a>
      <a href="galeria/index.php">Galeria</a>
      <a href="actividades/index.php">Actividades</a>


    </div>

    <!-- <div class="footer-col">
      <h5>De interes</h5>
      <a href="../../categorias/category/index.php">Categorías</a>
      <a href="../../destacados/index.php">Destacados</a>
      <a href="https://Arbelaez.com.co">Arbelaez.com.co</a>
    </div> -->

  </div>

  <div class="footer-bottom">
    <small>© 2026 Gran&Chela Club</small>
    <small>Todos los derechos reservados.</small>
  </div>
</footer>

<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$cssFile = $base . '/bar/Gran&Chela_Club/home/footer/footer.css';
$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
?>
<link rel="stylesheet" href="home/footer/footer.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">
<footer class="site-footer">
  <div class="footer-inner">

    <div class="footer-brand">
      <h1>Gran&Chela Club</h1>
      <p>Bar, club, discoteca y eventos</p>

      <div class="footer-social">
        <a href="#" aria-label="Instagram">◎</a>
        <a href="#" aria-label="Facebook">f</a>
        <a href="#" aria-label="TikTok">♪</a>
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
    <small>© 2024 Chapitour.co</small>
    <small>Todos los derechos reservados.</small>
  </div>
</footer>

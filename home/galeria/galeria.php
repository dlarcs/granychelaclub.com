<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/galeria/galeria.css';
$jsFile  = $base . '/home/galeria/galeria.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link rel="stylesheet" href="home/galeria/galeria.css<?= $cssVer ? '?v=' . $cssVer : '' ?>">

<section class="business-section business-gallery visible">
  <span class="section-label">Galería</span>

  <h2>Conoce el ambiente de Gran&Chela Club</h2>

  <p>
    Un bar discoteca con buena música, luces, licores, cervezas,
    micheladas y espacios ideales para bailar, cantar, celebrar
    y compartir momentos especiales con amigos.
  </p>

  <div class="gallery-grid">
    <img src="img/general1.jpg" alt="Ambiente de Gran&Chela Club">
    <img src="img/general7.jpg" alt="Bar y discoteca Gran&Chela Club">
    <img src="img/general2.jpg" alt="Espacio para eventos en Gran&Chela Club" class="gallery-img-mobile-hide">
  </div>

  <a href="galeria/index.php">
    <div class="button_container">
      <button class="btn btn30" type="button" name="button">Ver galería</button>
    </div>
  </a>
</section>

<script defer src="home/galeria/galeria.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"></script>

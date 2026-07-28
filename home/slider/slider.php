<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/home/slider/slider.css';
$jsFile  = $base . '/home/slider/slider.js';

$cssVer = is_file($cssFile)
    ? filemtime($cssFile)
    : '';

$jsVer = is_file($jsFile)
    ? filemtime($jsFile)
    : '';
?>

<link
  rel="stylesheet"
  href="home/slider/slider.css<?= $cssVer ? '?v=' . $cssVer : '' ?>"
>

<section
  class="gs gs-reveal"
  aria-label="Presentación de Gran y Chela Club"
>

  <!-- Slide 1 -->
  <article
    class="gs-slide gs-slide-1"
    style="background-image: url('img/general2.jpg');"
  >
    <div class="gs-overlay"></div>

    <div class="gs-content">

      <span class="gs-tag">
        Bar · Discoteca · Buena rumba
      </span>

      <h1 class="gs-title">
        Gran&amp;Chela Club
      </h1>

      <p class="gs-text">
        Un lugar para disfrutar la noche con buena música,
        licores, cervezas, micheladas y un ambiente lleno
        de energía para compartir con amigos.
      </p>

      <div
        class="gs-rating"
        aria-label="Calificación de 4.8 sobre 5"
      >
        <strong aria-hidden="true">
          ★★★★★
        </strong>

        <small>
          4.8 / 5
        </small>
      </div>

      <a
        class="gs-link"
        href="https://wa.me/573224680419?text=Hola%2C%20quiero%20reservar%20en%20Gran%26Chela%20Club"
        target="_blank"
        rel="noopener noreferrer"
      >
        Reservar o contactar
      </a>

    </div>
  </article>

  <!-- Slide 2 -->
  <article
    class="gs-slide gs-slide-2"
    style="background-image: url('img/general12.jpg');"
  >
    <div class="gs-overlay"></div>

    <div class="gs-content">

      <span class="gs-tag">
        Karaoke · Salsa · Promociones
      </span>

      <h2 class="gs-title">
        Rumba, sabor y buenos momentos
      </h2>

      <p class="gs-text">
        Vive noches especiales con karaoke, salsa,
        micheladas, promociones y música para bailar,
        cantar, brindar y pasarla bien.
      </p>

      <div
        class="gs-rating"
        aria-label="Calificación de 4.8 sobre 5"
      >
        <strong aria-hidden="true">
          ★★★★★
        </strong>

        <small>
          4.8 / 5
        </small>
      </div>

      <a
        class="gs-link"
        href="https://wa.me/573224680419?text=Hola%2C%20quiero%20conocer%20las%20actividades%20de%20Gran%26Chela%20Club"
        target="_blank"
        rel="noopener noreferrer"
      >
        Conocer más
      </a>

    </div>
  </article>

  <!-- Slide 3 -->
  <article
    class="gs-slide gs-slide-3"
    style="background-image: url('img/general11.jpg');"
  >
    <div class="gs-overlay"></div>

    <div class="gs-content">

      <span class="gs-tag">
        Eventos · Reservas · Celebraciones
      </span>

      <h2 class="gs-title">
        Alquila el espacio para tu evento
      </h2>

      <p class="gs-text">
        En Gran&amp;Chela Club también prestamos el espacio
        para cumpleaños, reuniones, celebraciones privadas
        y eventos especiales con reserva previa.
      </p>

      <div
        class="gs-rating"
        aria-label="Calificación de 4.8 sobre 5"
      >
        <strong aria-hidden="true">
          ★★★★★
        </strong>

        <small>
          4.8 / 5
        </small>
      </div>

      <a
        class="gs-link"
        href="https://wa.me/573224680419?text=Hola%2C%20quiero%20reservar%20Gran%26Chela%20Club%20para%20un%20evento"
        target="_blank"
        rel="noopener noreferrer"
      >
        Reservar evento
      </a>

    </div>
  </article>

  <!-- Indicators -->
  <div
    class="gs-controls"
    aria-label="Indicadores del carrusel"
  >
    <button
      class="gs-dot"
      type="button"
      aria-label="Diapositiva 1"
      tabindex="-1"
    ></button>

    <button
      class="gs-dot"
      type="button"
      aria-label="Diapositiva 2"
      tabindex="-1"
    ></button>

    <button
      class="gs-dot"
      type="button"
      aria-label="Diapositiva 3"
      tabindex="-1"
    ></button>
  </div>

</section>

<script
  defer
  src="home/slider/slider.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"
></script>

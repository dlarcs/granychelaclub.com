<?php
$base = rtrim($_SERVER['DOCUMENT_ROOT'], '/');

$cssFile = $base . '/actividades/actividades/actividades.css';
$jsFile  = $base . '/actividades/actividades/actividades.js';

$cssVer = is_file($cssFile) ? filemtime($cssFile) : '';
$jsVer  = is_file($jsFile) ? filemtime($jsFile) : '';
?>

<link
    rel="stylesheet"
    href="../actividades/actividades/actividades.css<?= $cssVer ? '?v=' . $cssVer : '' ?>"
>

<section class="business-section visible">

    <span class="section-label">
        Actividades & Promociones
    </span>

    <h2>
        Rumba, sabor y buenos momentos
    </h2>

    <p>
        Descubre la programación semanal de Gran&amp;Chela Club.
        Disfruta noches de karaoke, salsa, flow urbano, crossover
        y las mejores promociones en micheladas, cerveza, granizados
        y cubetazos, en un ambiente ideal para cantar, bailar,
        brindar y compartir con amigos.
    </p>

    <section class="cards-section">

        <div class="cards-grid">

            <!-- =========================================
                 PROMOCIONES Y ACTIVIDADES EXISTENTES
            ========================================== -->

            <!-- MIÉRCOLES -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-KARAOKE-001"
            >

                <div class="card-image">

                    <img
                        src="../img/general7.jpg"
                        alt="Miércoles de Voces y Copas en Gran&Chela Club"
                    >

                    <span class="card-badge">
                        Miércoles
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Miércoles de Voces y Copas
                    </h3>

                    <p>
                        Noche de karaoke para cantar, brindar y disfrutar.
                        Reúne a tus amigos y vive una experiencia llena
                        de música, diversión y buen ambiente.
                    </p>

                    <span class="card-location">
                        <span>&#128467;&#65039;</span>
                        Todos los miércoles
                    </span>

                </div>

            </article>

            <!-- JUEVES -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-SALSA-002"
            >

                <div class="card-image">

                    <img
                        src="../img/general3.jpg"
                        alt="Jueves Salsero Azúcar y Sabor"
                    >

                    <span class="card-badge">
                        Jueves
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Jueves Salsero: Azúcar y Sabor
                    </h3>

                    <p>
                        Ritmos salseros para bailar, gozar y vivir la noche.
                        Disfruta los mejores clásicos y un ambiente lleno
                        de sabor.
                    </p>

                    <span class="card-location">
                        <span>&#128467;&#65039;</span>
                        Todos los jueves
                    </span>

                </div>

            </article>

            <!-- VIERNES -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-FLOW-003"
            >

                <div class="card-image">

                    <img
                        src="../img/general8.jpg"
                        alt="Viernes de Flow Urbano"
                    >

                    <span class="card-badge">
                        Viernes
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Viernes de Flow Urbano
                    </h3>

                    <p>
                        Perreo, dancehall y la mejor energía para comenzar
                        el fin de semana con la mejor rumba.
                    </p>

                    <span class="card-location">
                        <span>&#128467;&#65039;</span>
                        Todos los viernes
                    </span>

                </div>

            </article>

            <!-- SÁBADO -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-SABADO-004"
            >

                <div class="card-image">

                    <img
                        src="../img/general10.jpg"
                        alt="Sábado de Fiesta Total Crossover"
                    >

                    <span class="card-badge">
                        Sábado
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Sábado de Fiesta Total Crossover
                    </h3>

                    <p>
                        Los mejores éxitos para bailar, brindar y disfrutar.
                        Salsa, merengue, bachata, reguetón y crossover
                        durante toda la noche.
                    </p>

                    <span class="card-location">
                        <span>&#128467;&#65039;</span>
                        Todos los sábados
                    </span>

                </div>

            </article>

            <!-- EVENTOS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-EVENTOS-005"
            >

                <div class="card-image">

                    <img
                        src="../img/general12.jpg"
                        alt="Eventos especiales en Gran&Chela Club"
                    >

                    <span class="card-badge">
                        Reserva
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Eventos Especiales
                    </h3>

                    <p>
                        ¿Quieres alquilar el lugar para tu evento?
                        Reserva tu espacio para cumpleaños, reuniones,
                        celebraciones y eventos privados.
                    </p>

                    <span class="card-location">
                        <span>&#128197;</span>
                        Reserva previa
                    </span>

                </div>

            </article>

            <!-- MICHELADAS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PROMO-006"
            >

                <div class="card-image">

                    <img
                        src="../img/general1.jpg"
                        alt="Micheladas 2x1 en Gran&Chela Club"
                    >

                    <span class="card-badge">
                        2x1
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Micheladas 2x1
                    </h3>

                    <p>
                        Aprovecha nuestra promoción de micheladas 2x1.
                        Comparte con tus amigos y disfruta una noche llena
                        de buena música, diversión y excelente ambiente.
                    </p>

                    <span class="card-location">
                        <span>&#127867;</span>
                        Promoción especial
                    </span>

                </div>

            </article>

            <!-- CERVEZA 2x1 -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PROMO-007"
            >

                <div class="card-image">

                    <img
                        src="../img/general5.jpg"
                        alt="Cerveza 2x1 en Gran&Chela Club"
                    >

                    <span class="card-badge">
                        2x1
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Cerveza 2x1
                    </h3>

                    <p>
                        Disfruta cerveza 2x1 y vive una noche llena de
                        buena música, amigos y el mejor ambiente para
                        brindar en Gran&amp;Chela Club.
                    </p>

                    <span class="card-location">
                        <span>&#127866;</span>
                        Promoción especial
                    </span>

                </div>

            </article>

            <!-- GRANIZADO MONSTER -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PROMO-008"
            >

                <div class="card-image">

                    <img
                        src="../img/general4.jpg"
                        alt="Granizado Monster 2x1"
                    >

                    <span class="card-badge">
                        Monster
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Granizado Monster 2x1
                    </h3>

                    <p>
                        Refresca tu noche con nuestros granizados Monster
                        2x1. Una mezcla perfecta para compartir y disfrutar.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Promoción especial
                    </span>

                </div>

            </article>

            <!-- GRANIZADO FOUR LOKO -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PROMO-009"
            >

                <div class="card-image">

                    <img
                        src="../img/general9.jpg"
                        alt="Granizado Four Loko 2x1"
                    >

                    <span class="card-badge">
                        Four Loko
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Granizado Four Loko 2x1
                    </h3>

                    <p>
                        Disfruta el sabor de nuestros granizados Four Loko
                        2x1. Una promoción para comenzar la rumba.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Promoción especial
                    </span>

                </div>

            </article>

            <!-- CUBETAZO -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PROMO-010"
            >

                <div class="card-image">

                    <img
                        src="../img/general6.jpg"
                        alt="Cubetazo de cervezas"
                    >

                    <span class="card-badge">
                        Cubetazo
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Cubetazo de Cervezas
                    </h3>

                    <p>
                        Comparte un cubetazo de cervezas y disfruta una
                        noche de karaoke, salsa, crossover y diversión.
                    </p>

                    <span class="card-location">
                        <span>&#127866;</span>
                        Promoción especial
                    </span>

                </div>

            </article>

            <!-- RUMBA -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-RUMBA-011"
            >

                <div class="card-image">

                    <img
                        src="../img/general11.jpg"
                        alt="Noches de rumba en Gran&Chela Club"
                    >

                    <span class="card-badge">
                        Rumba
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Noches de Rumba y Amigos
                    </h3>

                    <p>
                        Licores, cerveza, micheladas, karaoke y salsa
                        en un ambiente ideal para bailar, celebrar
                        y crear grandes momentos.
                    </p>

                    <span class="card-location">
                        <span>&#127925;</span>
                        Viernes y sábados
                    </span>

                </div>

            </article>

            <!-- =========================================
                 NUEVAS PROMOCIONES DE LAS IMÁGENES
            ========================================== -->

            <!-- GRANIZADOS CON LICOR -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-GRANIZADOS-012"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizados con licor de Gran&Chela Club"
                    >

                    <span class="card-badge">
                        Con licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Granizados con Licor
                    </h3>

                    <p>
                        Elige entre Tropical Rush, Watermelon Gin,
                        Apple Freeze, Blueberry Boom, Passion Berry
                        y Loko Freeze.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Seis sabores disponibles
                    </span>

                </div>

            </article>

            <!-- TROPICAL RUSH -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-TROPICAL-013"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Tropical Rush"
                    >

                    <span class="card-badge">
                        Tropical
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Tropical Rush
                    </h3>

                    <p>
                        Granizado preparado con whiskey, vodka
                        y sabores de frutos amarillos.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- WATERMELON GIN -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-WATERMELON-014"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Watermelon Gin"
                    >

                    <span class="card-badge">
                        Sandía
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Watermelon Gin
                    </h3>

                    <p>
                        Granizado preparado con vodka, ginebra
                        y sabor a sandía.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- APPLE FREEZE -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-APPLE-015"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Apple Freeze"
                    >

                    <span class="card-badge">
                        Manzana
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Apple Freeze
                    </h3>

                    <p>
                        Granizado preparado con Smirnoff, vodka
                        y sabor a manzana.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- BLUEBERRY BOOM -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-BLUEBERRY-016"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Blueberry Boom"
                    >

                    <span class="card-badge">
                        Mora azul
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Blueberry Boom
                    </h3>

                    <p>
                        Granizado preparado con tequila, vodka,
                        chicle y sabor a mora azul.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- PASSION BERRY -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-PASSION-BERRY-017"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Passion Berry"
                    >

                    <span class="card-badge">
                        Maracuyá
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Passion Berry
                    </h3>

                    <p>
                        Granizado preparado con tequila, vodka,
                        frambuesa y maracuyá.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- LOKO FREEZE -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-LOKO-018"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Loko Freeze"
                    >

                    <span class="card-badge">
                        Four Loko
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Loko Freeze
                    </h3>

                    <p>
                        Granizado preparado con Four Loko,
                        hielo y una mezcla refrescante.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Granizado con licor
                    </span>

                </div>

            </article>

            <!-- GRANIZADOS SIN LICOR -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-SIN-LICOR-019"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizados sin licor"
                    >

                    <span class="card-badge">
                        Sin licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Granizados sin Licor
                    </h3>

                    <p>
                        Elige entre Lulo Passion, Kryptonita,
                        Berry Melon y Cherry Passion.
                    </p>

                    <span class="card-location">
                        <span>&#129380;</span>
                        Cuatro sabores disponibles
                    </span>

                </div>

            </article>

            <!-- LULO PASSION -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-LULO-020"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Lulo Passion"
                    >

                    <span class="card-badge">
                        Sin licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Lulo Passion
                    </h3>

                    <p>
                        Granizado sin licor preparado con sabores
                        de maracuyá y lulo.
                    </p>

                    <span class="card-location">
                        <span>&#129380;</span>
                        Maracuyá y lulo
                    </span>

                </div>

            </article>

            <!-- KRYPTONITA -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-KRYPTONITA-021"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Kryptonita"
                    >

                    <span class="card-badge">
                        Sin licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Kryptonita
                    </h3>

                    <p>
                        Granizado sin licor preparado con limón,
                        maracuyá y fresa.
                    </p>

                    <span class="card-location">
                        <span>&#129380;</span>
                        Limón, maracuyá y fresa
                    </span>

                </div>

            </article>

            <!-- BERRY MELON -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-BERRY-MELON-022"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Berry Melon"
                    >

                    <span class="card-badge">
                        Sin licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Berry Melon
                    </h3>

                    <p>
                        Granizado sin licor preparado con sabores
                        de sandía y fresa.
                    </p>

                    <span class="card-location">
                        <span>&#129380;</span>
                        Sandía y fresa
                    </span>

                </div>

            </article>

            <!-- CHERRY PASSION -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-CHERRY-023"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Granizado Cherry Passion"
                    >

                    <span class="card-badge">
                        Sin licor
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Cherry Passion
                    </h3>

                    <p>
                        Granizado sin licor preparado con cereza,
                        maracuyá y limón.
                    </p>

                    <span class="card-location">
                        <span>&#129380;</span>
                        Cereza, maracuyá y limón
                    </span>

                </div>

            </article>

            <!-- TAMAÑOS DE GRANIZADOS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-TAMANOS-024"
            >

                <div class="card-image">

                    <img
                        src="../img/menu_granizados.jpg"
                        alt="Tamaños y precios de granizados"
                    >

                    <span class="card-badge">
                        Desde $10.000
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Tamaños de Granizados
                    </h3>

                    <p>
                        Vaso de 9 onzas por $10.000 o promoción
                        de dos vasos de 16 onzas por $24.000.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        Elige tu tamaño
                    </span>

                </div>

            </article>

            <!-- SÚPER GRANIZADOS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-SUPER-GRANIZADOS-025"
            >

                <div class="card-image">

                    <img
                        src="../img/promociones_bebidas.jpg"
                        alt="Promoción de súper granizados"
                    >

                    <span class="card-badge">
                        2 por $25.000
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Súper Granizados
                    </h3>

                    <p>
                        Promoción especial de dos súper granizados
                        por $25.000.
                    </p>

                    <span class="card-location">
                        <span>&#127865;</span>
                        2 unidades por $25.000
                    </span>

                </div>

            </article>

            <!-- MICHELADAS 2 POR 15.000 -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-MICHELADAS-026"
            >

                <div class="card-image">

                    <img
                        src="../img/promociones_bebidas.jpg"
                        alt="Promoción de micheladas dos por quince mil"
                    >

                    <span class="card-badge">
                        2 por $15.000
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Micheladas 2 por $15.000
                    </h3>

                    <p>
                        Dos micheladas por $15.000. Puedes elegir
                        cerveza Corona, Michelob Ultra o Club Colombia.
                    </p>

                    <span class="card-location">
                        <span>&#127867;</span>
                        Cerveza a elección
                    </span>

                </div>

            </article>

            <!-- CERVEZA 2X1 MARCAS SELECCIONADAS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-CERVEZA-MARCAS-027"
            >

                <div class="card-image">

                    <img
                        src="../img/promociones_bebidas.jpg"
                        alt="Promoción de cerveza 2x1 en marcas seleccionadas"
                    >

                    <span class="card-badge">
                        Cerveza 2x1
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Cerveza 2x1 en Marcas Seleccionadas
                    </h3>

                    <p>
                        Promoción de cerveza 2x1 disponible en
                        marcas seleccionadas.
                    </p>

                    <span class="card-location">
                        <span>&#127866;</span>
                        Aplican marcas seleccionadas
                    </span>

                </div>

            </article>

            <!-- CUBETAZO 7 CERVEZAS -->
            <article
                class="card promo-card"
                data-code="GRAN-CHELA-CUBETAZO-028"
            >

                <div class="card-image">

                    <img
                        src="../img/promociones_bebidas.jpg"
                        alt="Cubetazo con siete cervezas y media botella de aguardiente"
                    >

                    <span class="card-badge">
                        Desde $35.000
                    </span>

                </div>

                <div class="card-content">

                    <h3>
                        Cubetazo Especial
                    </h3>

                    <p>
                        Cubetazo con siete cervezas y media botella
                        de aguardiente desde $35.000.
                    </p>

                    <span class="card-location">
                        <span>&#127866;</span>
                        Desde $35.000
                    </span>

                </div>

            </article>

        </div>

    </section>

</section>

<script
    defer
    src="../actividades/actividades/actividades.js<?= $jsVer ? '?v=' . $jsVer : '' ?>"
></script>

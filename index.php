<?php
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
$navLinks = [
  ['label' => 'Inicio', 'href' => '#inicio'],
  ['label' => 'Ingredientes', 'href' => '#ingredientes'],
  ['label' => 'Beneficios', 'href' => '#beneficios'],
  ['label' => 'Nosotros', 'href' => '#nosotros'],
  ['label' => 'Contacto', 'href' => '#contacto'],
];
$stats = [
  ['value' => '3x', 'label' => 'más absorción de hierro'],
  ['value' => '6', 'label' => 'nutrientes clave'],
  ['value' => '100%', 'label' => 'ingredientes naturales'],
];
$ingredients = [
  ['name' => 'Quinoa', 'icon' => '🌾', 'description' => 'Proteínas completas y hierro vegetal de alto valor nutricional'],
  ['name' => 'Hierro', 'icon' => '⚗️', 'description' => 'Mineral esencial para la formación de hemoglobina y el transporte de oxígeno'],
  ['name' => 'Vitamina C', 'icon' => '🍊', 'description' => 'Potencia hasta 3 veces la absorción del hierro no hemínico'],
  ['name' => 'Cacao', 'icon' => '🍫', 'description' => 'Enmascara el sabor metálico del hierro; deliciosa y nutritiva'],
  ['name' => 'Fibra', 'icon' => '🌿', 'description' => 'Regula el tránsito intestinal y mantiene estables los niveles de glucosa'],
  ['name' => 'Antioxidantes', 'icon' => '✨', 'description' => 'Reducen el estrés oxidativo y apoyan el desarrollo saludable'],
];
$benefits = [
  ['icon' => '🩸', 'title' => 'Hierro biodisponible', 'body' => 'La combinación quinoa + vitamina C convierte el hierro no hemínico en una forma hasta 3 veces más absorbible por el organismo.'],
  ['icon' => '💪', 'title' => 'Proteínas completas', 'body' => 'La quinoa aporta los 9 aminoácidos esenciales, incluyendo lisina y metionina, para el crecimiento y desarrollo muscular.'],
  ['icon' => '🧠', 'title' => 'Concentración y memoria', 'body' => 'Favorece la síntesis de dopamina y noradrenalina, neurotransmisores vinculados al rendimiento cognitivo y escolar.'],
  ['icon' => '⚖️', 'title' => 'Glucosa estable', 'body' => 'La fibra de quinoa prolonga la saciedad y estabiliza los niveles de azúcar en sangre, con bajo índice glucémico.'],
  ['icon' => '🛡️', 'title' => 'Protección antioxidante', 'body' => 'Los antioxidantes presentes reducen el estrés oxidativo y fortalecen el sistema inmunológico en niños y adolescentes.'],
  ['icon' => '♻️', 'title' => 'Sin cadena de frío', 'body' => 'Producto seco de larga vida útil: accesible, económico y fácil de llevar a la escuela, al trabajo o a cualquier lugar.'],
];
$quoteWords = ['Galletas', 'que', 'transforman', 'la', 'merienda', 'en', 'salud', 'real', 'con', 'amor', 'y', 'ciencia.'];
$badgeLetters = preg_split('//u', 'QUINOA · HIERRO · VITAMINA C · ', -1, PREG_SPLIT_NO_EMPTY);
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KUNA - La merienda que cuida tu sangre</title>
  <meta name="description" content="Galletas artesanales de quinoa enriquecidas con hierro y vitamina C para prevenir la anemia.">
  <link rel="icon" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,300;9..144,400;9..144,600;9..144,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <header class="site-header" data-header>
    <div class="container nav-wrap">
      <a class="brand" href="#inicio" aria-label="KUNA inicio">
        <img src="assets/images/kuna_logo_icon.png" alt="Logo KUNA">
        <span>KUNA</span>
      </a>
      <nav class="desktop-nav" aria-label="Navegación principal">
        <?php foreach ($navLinks as $link): ?>
          <a href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a>
        <?php endforeach; ?>
      </nav>
      <a class="btn btn-small desktop-cta" href="#contacto">Pedir ahora</a>
      <button class="menu-toggle" data-menu-toggle aria-label="Abrir menú"><span></span><span></span><span></span></button>
    </div>
  </header>

  <div class="mobile-menu" data-mobile-menu>
    <?php foreach ($navLinks as $link): ?>
      <a href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a>
    <?php endforeach; ?>
    <a class="btn" href="#contacto">Pedir ahora</a>
  </div>

  <main>
    <section id="inicio" class="hero section-pad">
      <div class="grid-lines"><i></i><i></i><i></i></div>
      <div class="blob blob-gold hero-blob-a"></div>
      <div class="blob blob-brown hero-blob-b"></div>
      <div class="badge-spin circular-text" aria-hidden="true">
        <?php foreach ($badgeLetters as $i => $letter): ?>
          <span style="--i: <?= $i ?>; --total: <?= count($badgeLetters) ?>"><?= htmlspecialchars($letter) ?></span>
        <?php endforeach; ?>
        <b>✦</b>
      </div>
      <div class="container hero-grid">
        <div class="hero-copy">
          <p class="pill reveal-up">✦ Galleta Funcional Artesanal</p>
          <h1 class="display reveal-up delay-100">La merienda<br><em>que cuida</em><br>tu sangre.</h1>
          <p class="lead reveal-up delay-200">KUNA combina quinoa, hierro biodisponible y vitamina C en una galleta que convierte tu merienda diaria en una poderosa herramienta contra la anemia.</p>
          <div class="actions reveal-up delay-300">
            <a class="btn" href="#ingredientes">Descubre KUNA <span>→</span></a>
            <a class="btn btn-outline" href="#beneficios">Ver beneficios</a>
          </div>
          <div class="stats reveal-up delay-400">
            <?php foreach ($stats as $stat): ?>
              <div><strong><?= htmlspecialchars($stat['value']) ?></strong><span><?= htmlspecialchars($stat['label']) ?></span></div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="hero-media reveal-up delay-200">
          <div class="arch image-zoom">
            <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1c39d1c93-1778361011880.png" alt="Galletas artesanales KUNA de quinoa">
            <div class="float-card"><b>⬡ Con quinoa real</b><span>Proteínas completas + hierro vegetal</span></div>
          </div>
        </div>
      </div>
    </section>

    <section id="ingredientes" class="ingredients section-pad dark-section">
      <div class="container centered">
        <p class="eyebrow reveal-up">Lo que hay adentro</p>
        <h2 class="section-title light reveal-up delay-100">Ingredientes que hacen<br><em>la diferencia</em></h2>
        <p class="section-intro reveal-up delay-200">Cada componente fue elegido con precisión científica para maximizar la biodisponibilidad del hierro.</p>
        <div class="ingredient-wrap">
          <svg class="ingredient-lines" viewBox="0 0 1100 650" aria-hidden="true" focusable="false">
            <line x1="550" y1="325" x2="550" y2="128"></line>
            <line x1="550" y1="325" x2="825" y2="209"></line>
            <line x1="550" y1="325" x2="825" y2="475"></line>
            <line x1="550" y1="325" x2="550" y2="522"></line>
            <line x1="550" y1="325" x2="275" y2="475"></line>
            <line x1="550" y1="325" x2="275" y2="209"></line>
          </svg>
          <div class="cookie-center"><img src="https://img.rocket.new/generatedImages/rocket_gen_img_154680677-1778361010522.png" alt="Galleta KUNA"></div>
          <div class="ingredient-grid">
            <?php foreach ($ingredients as $ingredient): ?>
              <article class="ingredient-card reveal-up">
                <span><?= $ingredient['icon'] ?></span>
                <h3><?= htmlspecialchars($ingredient['name']) ?></h3>
                <p><?= htmlspecialchars($ingredient['description']) ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="beneficios" class="benefits">
      <div class="quote-band">
        <div class="container quote" data-quote>
          <?php foreach ($quoteWords as $word): ?>
            <span class="reveal-word <?= in_array($word, ['salud', 'ciencia.']) ? 'accent-word' : '' ?>"><?= htmlspecialchars($word) ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="container section-pad">
        <div class="two-col problem-solution">
          <div class="reveal-up">
            <p class="eyebrow">El problema</p>
            <h2 class="section-title">El hambre<br><em>oculta</em></h2>
            <div class="text-block">
              <p>La anemia ferropénica es una condición caracterizada por la deficiencia crítica de hierro, que impide la correcta formación de hemoglobina y limita el transporte de oxígeno en el organismo.</p>
              <p>En comunidades con acceso limitado, niños y adolescentes consumen suficientes calorías pero carecen de micronutrientes esenciales: un fenómeno conocido como <strong>hambre oculta</strong>.</p>
            </div>
            <ul class="clean-list">
              <li>Fatiga crónica y debilidad</li><li>Bajo rendimiento escolar</li><li>Déficits en concentración y memoria</li><li>Mareos y dificultad para respirar</li>
            </ul>
          </div>
          <div class="solution-card reveal-up delay-200">
            <div class="rounded-img image-zoom"><img src="https://images.unsplash.com/photo-1505473848660-33f47a4ab0f2" alt="Ingredientes naturales"></div>
            <div class="over-card"><p class="eyebrow">La solución KUNA</p><p>Una galleta artesanal funcional que convierte la merienda diaria en una <strong>intervención nutricional accesible</strong>. Sin medicamentos. Sin cadena de frío. Sin complicaciones.</p></div>
          </div>
        </div>
        <p class="eyebrow">Beneficios clave</p>
        <h2 class="section-title small">¿Por qué elegir <em>KUNA</em>?</h2>
        <div class="benefit-grid">
          <?php foreach ($benefits as $benefit): ?>
            <article class="benefit-card reveal-up card-lift"><span><?= $benefit['icon'] ?></span><h3><?= htmlspecialchars($benefit['title']) ?></h3><p><?= htmlspecialchars($benefit['body']) ?></p></article>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="impact dark-section">
        <div class="container centered">
          <p class="eyebrow">Impacto social</p>
          <h2 class="section-title light">Más económico prevenir que curar</h2>
          <p class="section-intro">KUNA democratiza el acceso a nutrientes de alta densidad. Alternativa económica frente a laboratorios, consultas especializadas y medicamentos.</p>
          <div class="chips"><span>Apta para veganos</span><span>Bajo índice glucémico</span><span>Larga vida útil</span><span>Sin cadena de frío</span></div>
        </div>
      </div>
    </section>

    <section id="contacto" class="contact section-pad">
      <div class="container two-col">
        <div class="reveal-up">
          <p class="eyebrow">Contacto</p>
          <h2 class="section-title">Escríbenos,<br><em>con gusto</em><br>te atendemos.</h2>
          <div class="contact-list"><p>📍 <strong>Ubicación</strong><span>Caracas, Venezuela</span></p><p>📧 <strong>Email</strong><span>galletaskuna@gmail.com</span></p><p>📱 <strong>WhatsApp</strong><span>+58 0424 210 6499</span></p></div>
          <div id="nosotros" class="story"><h3>Nuestra historia</h3><p>KUNA nació del deseo de transformar la merienda escolar en una herramienta de salud. Inspirados en la quinoa andina y la ciencia nutricional moderna, creamos galletas que saben bien y hacen bien.</p></div>
        </div>
        <div class="form-card reveal-up delay-200">
          <?php if ($submitted): ?>
            <div class="thanks"><span>🍪</span><h3>¡Gracias por escribirnos!</h3><p>Nos pondremos en contacto contigo muy pronto.</p></div>
          <?php else: ?>
            <h3>Envíanos un mensaje</h3>
            <form method="post" action="#contacto">
              <input name="nombre" type="text" placeholder="Tu nombre completo" required>
              <input name="email" type="email" placeholder="Correo electrónico" required>
              <textarea name="mensaje" rows="4" placeholder="¿En qué podemos ayudarte?" required></textarea>
              <button class="btn full" type="submit">Enviar mensaje</button>
            </form>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div><a class="brand" href="#inicio"><img src="assets/images/kuna_logo_icon.png" alt="Logo KUNA"><span>KUNA</span></a><p>Nutrición real en cada mordida. Hecho con amor y ciencia.</p></div>
      <nav><?php foreach ($navLinks as $link): ?><a href="<?= htmlspecialchars($link['href']) ?>"><?= htmlspecialchars($link['label']) ?></a><?php endforeach; ?><a href="#">Privacidad</a></nav>
      <div class="social"><a href="https://www.instagram.com/kunaf_it/?hl=es" aria-label="Instagram"><img class="social-icon" src="assets/images/social.png" alt="Instagram"></a><a href="mailto:galletaskuna@gmail.com" aria-label="Email"><img class="social-icon" src="assets/images/gmail.png" alt="Email"></a></div>
    </div>
    <div class="container legal">© 2026 KUNA. Todos los derechos reservados. <span>Galletas nutritivas · Venezuela</span></div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>

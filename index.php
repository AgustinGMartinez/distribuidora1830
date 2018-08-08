<?php $home = true; ?>
<?php require('header.php'); ?>
<main class="index">
  <div class="section-slider">
    <ul class="slider" id="carousel">
      <li class="slide"><img src="img/s4.jpg" alt="promocion 1830"></li>
      <li class="slide"><img src="img/s2.jpg" alt="promocion 1830"></li>
      <li class="slide"><img src="img/s1.jpg" alt="promocion 1830"></li>
    </ul>
  </div>

  <div class="section-promotion">
    <div class="container">
      <div class="row">
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="img/gondola.jpg" alt="servicio precios catalogo 1830">
          </div>
          <h1 class="title my-4">Productos gastrónomicos</h1>
          <p class="description text-muted">Comercializamos y distribuimos alimentos secos, refrigerados y congelados para establecimientos gastronómicos.
          </p>
        </div>
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="img/descuento.jpg" alt="servicio precios catalogo 1830">
          </div>
          <h3 class="title my-4">Catálogo</h3>
          <p class="description text-muted">Conocé y aprovechá nuestro catálogo de ofertas semanales. No te pierdas ninguna de nuestras promociones con importantes descuentos.
          </p>
          <a href="productos.php" class="btn p-0">
            <button class="btn link gray">Ver catálogo</button>
            <button class="btn link red">Ver catálogo</button>
            <button class="btn link fake">Ver catálogo</button>
          </a>
        </div>
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="img/bussiness.jpg" alt="servicio precios catalogo 1830">
          </div>
          <h3 class="title my-4">Lista de precios</h3>
          <p class="description text-muted">Consultá nuestros precios siempre que quieras, para que nunca te pierdas de ninguna de las ofertas te ofrecemos. Nuestros precios son accesibles.
          </p>
          <a href="lista.xlsx" class="btn p-0" download="Lista de precios 1830 <?php echo date('d-m-Y') ?>">
            <button class="btn link gray">Descargar <span class="fa fa-download"></span></button>
            <button class="btn link red">Descargar <span class="fa fa-download"></span></button>
            <button class="btn link fake">Descargar <span class="fa fa-download"></span></button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-contact">
    <div class="contact-blue-bg"></div>
    <div class="container">
      <div class="row">
        <div class="contact-content col-12 col-md-6 offset-md-6 row">
          <h3 class="mx-auto">Pedí tu cotización</h3>
          <p class="phrase text-center">En distribuidora 1830 nos destacamos por nuestro excelente servicio y atención personalizada. Contactá con nosotros a toda hora. Estamos siempre para servirte.</p>
          <form method="post" id="contact-form" class="row">
            <div class="col-md-6"><input name="name" id="name" type="text" class="w-100" required placeholder="Tu nombre..."></div>
            <div class="col-md-6"><input name="subject" id="subject" type="text" class="w-100" required placeholder="Asunto..."></div>
            <div class="col-md-6"><input name="email" id="email" type="email" class="w-100" required placeholder="Tu email..."></div>
            <div class="col-md-6"><input name="phone" id="phone" type="text" class="w-100" placeholder="Teléfono... (opcional)"></div>
            <textarea name="message" id="message" rows="4" class="col-12" placeholder="Mensaje..."></textarea>
            <button id="submitContactForm" class="btn mx-auto">Enviar</button>
            <button id="sendingFormSpinner" class="btn mx-auto" style="display: none !important;"><img src="img/spinner.gif" alt="spinner cargando gif" width="20px"> Enviando...</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="section-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6 img-container">
          <img src="img/logo.png" alt="distribuidora">
        </div>
        <div class="col-md-6 description">
          <h3>¿Por qué elegirnos?</h3>
          <p>Nuestra trayectoria, calidad de servicio y atención personalizada son algunos de nuestros principios que nos han hecho crecer exponencialmente y destacarnos por sobre la competencia en los últimos años.</p>
          <p>A diferencia de otras grandes firmas, <strong>nosotros preferimos ofrecerte una calidad de atención inigualable</strong> poniendo en primer lugar y suma consideración tus necesidades comerciales.</p>
          <a href="nosotros.php" class="btn p-0">
            <button class="btn link gray">Quiero conocerlos más &gt;</button>
            <button class="btn link red">Quiero conocerlos más &gt;</button>
            <button class="btn link fake">Quiero conocerlos más &gt;</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-clients">
    <div class="container text-center">
      <h2>Nuestros clientes</h2>
      <ul class="row">
        <li class="dh-container has-own-bg">
          <img src="img/marca1.jpg" alt="marca comida">
          <div class="dh-overlay">El patito feo!</div>
        </li>
        <li class="dh-container">
          <img src="img/marca2.jpg" alt="marca comida">
          <div class="dh-overlay">El patito lindo!</div>
        </li>
        <li class="dh-container">
          <img src="img/marca3.png" alt="marca comida">
          <div class="dh-overlay">El patito raro!</div>
        </li>
        <li class="dh-container">
          <img src="img/marca2.jpg" alt="marca comida">
          <div class="dh-overlay">El patito quejumbroso!</div>
        </li>
        <li class="dh-container">
          <img src="img/marca3.png" alt="marca comida">
          <div class="dh-overlay">El patito cabizbajo!</div>
        </li>
        <li class="dh-container has-own-bg">
          <img src="img/marca1.jpg" alt="marca comida">
          <div class="dh-overlay">El patito cantor!</div>
        </li>
      </ul>
    </div>
  </div>
</main>

<script type="text/javascript">
  var pageName = "index.php";
</script>
<?php require("footer.php"); ?>

<?php require('header.php'); ?>
<main class="index">
  <div class="section-slider">
    <ul class="slider" id="carousel">
      <li class="slide"><img src="http://via.placeholder.com/1900x700" alt="promocion 1830"></li>
      <li class="slide"><img src="http://via.placeholder.com/1900x700" alt="promocion 1830"></li>
      <li class="slide"><img src="http://via.placeholder.com/1900x700" alt="promocion 1830"></li>
    </ul>
  </div>

  <div class="section-promotion">
    <div class="container">
      <div class="row">
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="http://via.placeholder.com/800x600" alt="servicio precios catalogo 1830">
          </div>
          <h3 class="title my-4">Productos gastrónomicos</h3>
          <p class="description text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem dolores fugit et ducimus culpa nulla, temporibus quod soluta corrupti iure.
          </p>
        </div>
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="http://via.placeholder.com/800x600" alt="servicio precios catalogo 1830">
          </div>
          <h3 class="title my-4">Catálogo</h3>
          <p class="description text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab molestias quae, sequi. Et cumque dolores odio, placeat blanditiis ratione accusamus!
          </p>
          <a href="productos.php" class="btn link">Ver catálogo</a>
        </div>
        <div class="promo col-md-4">
          <div class="img-container">
            <img src="http://via.placeholder.com/800x600" alt="servicio precios catalogo 1830">
          </div>
          <h3 class="title my-4">Lista de precios</h3>
          <p class="description text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio possimus impedit, fugit, est pariatur voluptatum consequuntur aspernatur at exercitationem molestias.
          </p>
          <a href="lista.xlsx" class="btn link" download="Lista de precios 1830 <?php echo date('d-m-Y') ?>">Descargar</a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-contact">
    <div class="contact-blue-bg"></div>
    <div class="container">
      <div class="row">
        <div class="contact-content col-md-6 offset-md-6 row">
          <h3 class="mx-auto">Pedí tu cotización</h3>
          <p class="phrase text-center">We love to listen and we are eagerly waiting to talk to you regarding your project. Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
          <form method="post" id="contact-form" class="row">
            <div class="col-md-6"><input name="name" type="text" class="w-100" required placeholder="Tu nombre..."></div>
            <div class="col-md-6"><input name="subject" type="text" class="w-100" required placeholder="Asunto..."></div>
            <div class="col-md-6"><input name="email" type="email" class="w-100" required placeholder="Tu email..."></div>
            <div class="col-md-6"><input name="phone" type="text" class="w-100" placeholder="Teléfono... (opcional)"></div>
            <textarea name="message" rows="4" cols="80" placeholder="Mensaje..."></textarea>
            <button class="btn d-inline-block mx-auto">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="section-us">
    <div class="container">
      <div class="row">
        <div class="col-md-6 img-container">
          <img src="http://via.placeholder.com/800x550" alt="distribuidora">
        </div>
        <div class="col-md-6 description">
          <h3>¿Por qué elegirnos?</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores vero accusantium, consequatur cumque, maxime magnam mollitia sed at rem velit asperiores aspernatur quas odio a reprehenderit voluptatibus explicabo eum unde ullam ea labore. Eaque, nam quasi. Consequuntur aliquid aspernatur quis deleniti itaque, natus, inventore repellendus atque in dolore expedita fugiat?</p>
          <button class="btn link more">Ver más</button>
        </div>
      </div>
    </div>
  </div>

  <div class="section-clients">
    <div class="container">
      <h2 class="text-center">Nuestros clientes</h2>
      <ul class="row">
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
          <div class="dh-overlay">El patito feo!</div>
        </li>
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
          <div class="dh-overlay">El patito lindo!</div>
        </li>
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
          <div class="dh-overlay">El patito raro!</div>
        </li>
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
          <div class="dh-overlay">El patito quejumbroso!</div>
        </li>
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
          <div class="dh-overlay">El patito cabizbajo!</div>
        </li>
        <li class="dh-container">
          <img src="https://via.placeholder.com/200x100" alt="marca comida">
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

<?php require('header.php'); ?>
<main class="contact-page">
  <div class="head">
    <div class="container p-0">
      <h1>Contacto</h1>
      <ul class="navigator mb-0">
        <li class="d-inline"><a href="index.php">Inicio <span class="fa fa-arrow"></span></a></li>
        <li class="d-inline">Contacto</li>
      </ul>
    </div>
  </div>

  <div class="contact-main">
    <div class="container">
      <div class="row">
        <div class="contact-left col-lg-3">
          <h3>Contacto</h3>
          <p><span class="fa fa-map-marker"></span> 33 orientales 1828, Boedo, CABA.</p>
          <p><span class="fa fa-phone"></span><a href="tel:+541122895991"> +54 (11) 2289 5991</a></p>
          <p><span class="fa fa-envelope"></span><a href="mailto:ventas1830@gmail.com">ventas1830@gmail.com</a> </p>
          <p><span class="fa fa-envelope"></span><a href="mailto:pedidos1830@gmail.com">pedidos1830@gmail.com</a> </p>
          <p><span class="fa fa-clock-o"></span> Lun - Sab: 8AM - 8PM </p>
        </div>
        <div class="contact-right col-lg-9">
          <h3>Formulario de contacto</h3>
          <p class="phrase">We love to listen and we are eagerly waiting to talk to you regarding your project. Get in touch with us if you have any queries and we will get back to you as soon as possible.</p>
          <form method="post" id="contact-form" class="row">
            <div class="col-md-6"><input name="name" id="name" type="text" class="w-100" required placeholder="Tu nombre..."></div>
            <div class="col-md-6"><input name="subject" id="subject" type="text" class="w-100" required placeholder="Asunto..."></div>
            <div class="col-md-6"><input name="email" id="email" type="email" class="w-100" required placeholder="Tu email..."></div>
            <div class="col-md-6"><input name="phone" id="phone" type="text" class="w-100" placeholder="Teléfono... (opcional)"></div>
            <textarea name="message" id="message" class="col-12" rows="4" placeholder="Mensaje..."></textarea>
            <button id="submitContactForm" class="btn">Enviar</button>
            <button id="sendingFormSpinner" class="btn" style="display: none !important;"><img src="img/spinner.gif" alt="spinner cargando gif" width="20px"> Enviando...</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.340610776447!2d-58.421974640558965!3d-34.63450133454489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccba96d50d287%3A0x82bddd4bdb3d3bc7!2sTreinta+y+Tres+Orientales+1828%2C+C1257ACR+CABA!5e0!3m2!1ses-419!2sar!4v1533315526139" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
  </iframe>
</main>

<script type="text/javascript">
  var pageName = "contacto.php";
</script>
<?php require("footer.php"); ?>

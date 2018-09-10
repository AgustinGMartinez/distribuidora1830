<?php
$productos = true;
$title = "Conocé nuestra lista de productos gastronómicos en Distribuidora Gastronómica 1830";
$desc = "Acá te presentamos un catálogo con nuestros productos de venta gastronómica y alimentos más destacados. Mirá tambien nuestra lista completa de productos para la gastronomía.";
?>
<?php require('header.php'); ?>
<main class="products-page">
  <div class="head">
    <div class="container p-0">
      <h1>Productos</h1>
      <ul class="navigator mb-0">
        <li class="d-inline"><a href="index.php">Inicio <span class="fa fa-arrow"></span></a></li>
        <li class="d-inline">Productos</li>
      </ul>
    </div>
  </div>

  <div class="products-top">
    <div class="container">
      <h2 class="text-center">Marcas que trabajamos</h2>
      <ul class="slider carousel2">
        <li class="slide"><img src="img/san bernardo.jpg" alt="san bernardo distribuidora gastronómica"></li>
        <li class="slide"><img src="img/comensal.png" alt="comensal distribuidora gastronómica"></li>
        <li class="slide"><img src="img/luchetti.png" alt="luchetti distribuidora gastronómica"></li>
        <li class="slide"><img src="img/ledesma.jpg" alt="ledesma distribuidora gastronómica"></li>
        <li class="slide"><img src="img/abedul.png" alt="abedul distribuidora gastronómica"></li>
        <li class="slide"><img src="img/tonutti.png" alt="tonutti distribuidora gastronómica"></li>
        <li class="slide"><img src="img/cremigal.png" alt="cremigal distribuidora gastronómica"></li>
        <li class="slide"><img src="img/la piamontesa.png" alt="la piamontesa distribuidora gastronómica"></li>
        <li class="slide"><img src="img/sersale.jpg" alt="sersale distribuidora gastronómica"></li>
      </ul>
      <ul class="slider carousel3" dir="rtl">
        <li class="slide"><img src="img/dos hermanos.png" alt="dos hermanos distribuidora gastronómica"></li>
        <li class="slide"><img src="img/la paulina.jpeg" alt="la paulina distribuidora gastronómica"></li>
        <li class="slide"><img src="img/milkaut.png" alt="milkaut distribuidora gastronómica"></li>
        <li class="slide"><img src="img/orloc.png" alt="orloc distribuidora gastronómica"></li>
        <li class="slide"><img src="img/la banda.jpg" alt="la banda distribuidora gastronómica"></li>
        <li class="slide"><img src="img/scudetto.png" alt="scudetto distribuidora gastronómica"></li>
        <li class="slide"><img src="img/ravana.png" alt="ravana distribuidora gastronómica"></li>
        <li class="slide"><img src="img/casaliva.jpg" alt="casaliva distribuidora gastronómica"></li>
        <li class="slide"><img src="img/copetin.gif" alt="copetin distribuidora gastronómica"></li>
      </ul>
    </div>
  </div>

  <div class="products-catalog-head">
    <div class="container">
      <h2>Catálogo</h2>
      <h4>¡Conocé nuestros productos más pedidos!</h4>
    </div>
  </div>

  <div class="products-download-section">
    <div class="container d-flex">
      <a href="lista.xls" class="btn p-0 ml-auto d-inline-block" download="Lista de precios 1830 <?php echo date('d-m-Y') ?>">
        <button class="btn link gray">Descargar lista de productos <span class="fa fa-download"></span></button>
        <button class="btn link red">Descargar lista de productos <span class="fa fa-download"></span></button>
        <button class="btn link fake">Descargar lista de productos <span class="fa fa-download"></span></button>
      </a>
    </div>
  </div>

  <div class="products-catalog-body">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat11.jpg" alt="LECHE ENTERA/DESCREMADA YATASTO X1LT gastronomía">
          </div>
          <h3>LECHE ENTERA/DESCREMADA YATASTO X1LT</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="" src="img/cat01.jpg" alt="FIAMBRE PATA DE CERDO PIAMONTESA XKG gastronomía">
          </div>
          <h3>FIAMBRE PATA DE CERDO PIAMONTESA XKG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat02.jpg" alt="PILÓN DE MANTECA LA MANSA X 5KG gastronomía">
          </div>
          <h3>PILÓN DE MANTECA LA MANSA X 5KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat15.jpg" alt="TAPAS DE EMPANADA X 12U TIPO CRIOLLAS Y TAPAS DE PASCUALINA X2 U (MISMO PRECIO) gastronomía">
          </div>
          <h3>TAPAS DE EMPANADA X 12U TIPO CRIOLLAS Y TAPAS DE PASCUALINA X2 U (MISMO PRECIO)</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat06.jpg" alt="ACEITE DE MAIZ INDIVIDUAL ADP X200 UNIDADES gastronomía">
          </div>
          <h3>ACEITE DE MAIZ INDIVIDUAL ADP X200 UNIDADES</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat10.jpg" alt="JAMÓN COCIDO ESCUDETO X KG gastronomía">
          </div>
          <h3>JAMÓN COCIDO ESCUDETO X KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat16.jpg" alt="QUESO MAR DEL PLATA LOS MORITANES X KG gastronomía">
          </div>
          <h3>QUESO MAR DEL PLATA LOS MORITANES X KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat17.jpg" alt="QUESO BRIE MOZZARI gastronomía">
          </div>
          <h3>QUESO BRIE MOZZARI</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat07.jpg" alt="ACEITUNAS VERDES N° 1 C/CAROZO COPETÍN X 5KG gastronomía">
          </div>
          <h3>ACEITUNAS VERDES N° 1 C/CAROZO COPETÍN X 5KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat12.jpg" alt="LIMÓN Y VINAGRE DE MANZANA INDIVIDUAL ADP X200 UNIDADES gastronomía">
          </div>
          <h3>LIMÓN Y VINAGRE DE MANZANA INDIVIDUAL ADP X200 UNIDADES</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cat04.jpg" alt="SARDO ESTACIONADO LOS MARITANES X KG gastronomía">
          </div>
          <h3>SARDO ESTACIONADO LOS MARITANES X KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/mani.jpg" alt="MANI SALADO COPETÍN X 800GR gastronomía">
          </div>
          <h3>MANI SALADO COPETÍN X 800GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/DULCE DE LECHE.jpg" alt="dulce de leche san bernardo gastronomía">
          </div>
          <h3>DULCE DE LECHE SAN BERNARDO X 1KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/PALITOS.jpg" alt="PALITOS COPETÍN X 800GR gastronomía">
          </div>
          <h3>PALITOS COPETÍN X 800GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/VINAGRE.png" alt="VINAGRE DE MANZANA, DE ALCOHOL Y DE VINO gastronomía">
          </div>
          <h3>VINAGRE DE MANZANA, DE ALCOHOL Y DE VINO</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/ACEITE DE GIRASOL.jpg" alt="ACEITE DE GIRASOL CASALIVA X 5LTS gastronomía">
          </div>
          <h3>ACEITE DE GIRASOL CASALIVA X 5LTS</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/TOMATES.jpg" alt="TOMATES PELADOS PERITAS ENTEROS LA BANDA X 2.5KG gastronomía">
          </div>
          <h3>TOMATES PELADOS PERITAS ENTEROS LA BANDA X 2.5KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/PALMITOS.jpg" alt="PALMITOS LA BANDA X 800GR gastronomía">
          </div>
          <h3>PALMITOS LA BANDA X 800GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/ARVEJAS.jpg" alt="ARVEJAS LA BANDA X 850GR gastronomía">
          </div>
          <h3>ARVEJAS LA BANDA X 850GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/ATUN.jpg" alt="LOMITOS DE ATÚN AL NATURAL PUNTAMAR gastronomía">
          </div>
          <h3>LOMITOS DE ATÚN AL NATURAL PUNTAMAR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/CHOCLO.jpg" alt="GRANOS DE CHOCLO AMARILLO LA BANDA X 800GR gastronomía">
          </div>
          <h3>GRANOS DE CHOCLO AMARILLO LA BANDA X 800GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/DURAZNOS.jpg" alt="DURAZNOS EN MITADES LA BANDA X 820GR gastronomía">
          </div>
          <h3>DURAZNOS EN MITADES LA BANDA X 820GR</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/PAN RALLADO.jpg" alt="PAN RALLADO SILVINA X 5KG gastronomía">
          </div>
          <h3>PAN RALLADO SILVINA X 5KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/ARROZ.jpg" alt="ARROZ PARBOIL DOS HERMANOS X 5KG gastronomía">
          </div>
          <h3>ARROZ PARBOIL DOS HERMANOS X 5KG</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/MOZZARELLA.jpg" alt="QUESO MOZZARELLA TONUTTI CILÍNDRICO gastronomía">
          </div>
          <h3>QUESO MOZZARELLA TONUTTI CILÍNDRICO</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/JAMON.jpg" alt="JAMÓN SCUDETTO gastronomía">
          </div>
          <h3>JAMÓN SCUDETTO</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/queso tybo.jpg" alt="QUESO TYBO CREMIGAL gastronomía">
          </div>
          <h3>QUESO TYBO CREMIGAL</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/JAMON COCIDO.jpg" alt="JAMÓN COCIDO SCUDETTO gastronomía">
          </div>
          <h3>JAMÓN COCIDO SCUDETTO</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/CREMOSO.png" alt="QUESO CREMOSO CREMIGAL gastronomía">
          </div>
          <h3>QUESO CREMOSO CREMIGAL</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/fideos.jpg" alt="FIDEOS LUCHETTI gastronomía">
          </div>
          <h3>FIDEOS LUCHETTI</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/peras.jpg" alt="PERAS COPA DE ORO gastronomía">
          </div>
          <h3>PERAS COPA DE ORO</h3>
        </div>

        <div class="col-lg-3 col-sm-6 col-12 col-md-4 product">
          <div class="img-container">
            <img class="w-100" src="img/cheddar.png" alt="Queso cheddar untable la paulina gastronomía">
          </div>
          <h3>QUESO CHEDDAR UNTABLE LA PAULINA</h3>
        </div>

      </div>
    </div>
  </div>
</main>

<script type="text/javascript">
  var pageName = "productos.php";
</script>
<?php require("footer.php"); ?>

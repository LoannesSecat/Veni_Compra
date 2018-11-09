<?php
/* Smarty version 3.1.30, created on 2018-11-03 04:01:11
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\Interfaces\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bdd0f779c79c5_31151143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c147dfe902f717cddd618c8a6e76f2eebbf30651' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\Interfaces\\index.html',
      1 => 1541090259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdd0f779c79c5_31151143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">

  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css" />
  <!--Estilos personalizados-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--Animaciones-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  <!--Fuente roboto-->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

  <!--Barra navegacion-->
  <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a href="index.html" class="brand-logo" id="logo">Logo</a>
        <div class="left" style="width: 100%;">
          <form>
            <div class="input-field" style="display:none;" id="bar-search">
              <input id="search-txt" type="search" required>
              <label class="label-icon" for="search-txt"><i class="material-icons">search</i></label>
              <i class="material-icons" id="close">close</i>
            </div>
          </form>
        </div>
        <a href="#" class="sidenav-trigger" data-target="menu">
          <i class="material-icons">menu</i>
        </a>
        <div class="right hide-on-large-only">
          <ul>
            <li><a href="#" id="search-icon-s"> <i class="material-icons">search</i></a></li>
          </ul>
        </div>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#" id="search-icon"> <i class="material-icons">search</i></a></li>
          <li><a href="iniciar.html">Iniciar<i class="material-icons right">account_circle</i></a></li>
          <li><a href="registro.html">Registrarse<i class="material-icons right">account_circle</i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="iniciar.html">Iniciar<i class="material-icons">contacts</i></a></li>
    <li><a href="registro.html">Registrarse<i class="material-icons">account_circle</i></a></li>
  </ul>

  <!--Carrousel-->
  <div class="slider">
    <ul class="slides blue">
      <li>
        <a href="promociones.html">
          <img src="img/carousel/slider-0.jpg" class="img-responsive" alt="">
        </a>
        <div class="caption left-align">
          <h3>¡Moderniza tu sala de estar!</h3>
        </div>
        
      </li>

      <li>
        <a href="promociones.html">
          <img src="img/carousel/slider-1.jpg" class="responsive-img" alt="">
        </a>
        <div class="caption center-align">
          <h3>Obten articulos invaluables</h3>
        </div>
      </li>

      <li>
        <a href="promociones.html">
          <img src="img/carousel/slider-2.jpg" class="responsive-img" alt="">
        </a>
        <div class="caption right-align">
          <h3>Mantente en la vanguardia</h3>
        </div>
      </li>
    </ul>
  </div>


  <!--Items de venta-->
  <div class="container">
    <p>Productos</p>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">20.000</span>
                </div>
                <div class="name">
                  <span class="name white-text">Gorra</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/shirt-2.jpeg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">20.000</span>
                </div>
                <div class="name">
                  <span class="name white-text">Camisa</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/ryzen.png" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">20.000</span>
                </div>
                <div class="name">
                  <span class="white-text">Ryzen3</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/ball.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">$70.000</span>
                </div>
                <div class="name">
                  <span class="white-text">Balon</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/tv.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">$2.000.000</span>
                </div>
                <div class="name">
                  <span class="white-text">Television</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="img/card/xbox.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="producto.html" class="fa"><i class="material-icons white-text">favorite</i></a>
                  <a href="producto.html" class="fa"><i class="material-icons white-text">forward</i></a>
                </div>
                <div class="text">
                  <span class="white-text">$1.300.000</span>
                </div>
                <div class="name">
                  <span class="white-text">Xbox</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Categorias-->
  <div class="container" id="categorias">
    <p>Categorias</p>
    <div class="row">
      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/camera.svg" alt="">
            </div>
            <div class="content">
              <span>Informatica</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/pc.svg" alt="">
            </div>
            <div class="content">
              <span>Fotografia</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/gamepad.svg" alt="">
            </div>
            <div class="content">
              <span>Juegos</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/running.svg" alt="">
            </div>
            <div class="content">
              <span>Fitness</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/animal-paw-print.svg" alt="">
            </div>
            <div class="content">
              <span>Mascotas</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/engineer.svg" alt="">
            </div>
            <div class="content">
              <span>Construccion</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/robotic.svg" alt="">
            </div>
            <div class="content">
              <span>Juguetes</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/makeup.svg" alt="">
            </div>
            <div class="content">
              <span>Maquillaje</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/laundry.svg" alt="">
            </div>
            <div class="content">
              <span>Ropa</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">
            <div class="image">
              <img src="img/categorias/headphones.svg" alt="">
            </div>
            <div class="content">
              <span>Musica</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <a href="resultados.html">
          <div class="category hoverable">

            <div class="image">
              <img src="img/categorias/avengers.svg" alt="">
            </div>
            <div class="content">
              <span>Comics</span>
            </div>
          </div>
        </a>
      </div>

      <div class="col s6 m4 l2">
        <div class="category hoverable">
          <div class="image">
            <img src="img/categorias/vegetables.svg" alt="">
          </div>
          <div class="content">
            <span>Comida</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Footer-->
  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 l4">
          <h5>Veni compa</h5>
          <section>
            <span>Una compañia salida del sena, hecho por lo mejor del valle :V</span>
          </section>
        </div>
        <div class="col s12 m6 l4">
          <h5>Mapa del sitio</h5>
          <section>
            <ul>
              <li>
                <a href="">Inicio</a>
              </li>
              <li>
                <a href="">Ayuda</a>
              </li>
            </ul>
          </section>
        </div>
        <div class="col s12 m6 l4">
          <h5>Contactanos</h5>
          <section>
            <span>123456789</span>
            <br>
            <span>Pagina@gmail.com</span>
          </section>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="center">
        <h6>2018 ADSI 149 -SENA DERECHOS RERSERVADOS</h6>
      </div>
    </div>
  </footer>


  <!--JQuery-->
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
  <!--JavaScript at end of body for optimized loading-->
  <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"><?php echo '</script'; ?>
>
  <!--Componentes js-->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/init.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}

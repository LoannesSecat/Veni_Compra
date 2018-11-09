<?php
/* Smarty version 3.1.30, created on 2018-11-07 20:57:15
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\promociones.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be3439b86b8a2_40283400',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97dd951febe0bad766bcf944a791c164c4bdf2b0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\promociones.html',
      1 => 1541620632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3439b86b8a2_40283400 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Estilos personalizados-->
  <link rel="stylesheet" type="text/css" href="web/css/style.css">
  <!--Fuente roboto-->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8">
</head>

<body>

  <!--Barra navegacion-->
  <nav>
    <div class="nav-wrapper">
      <div class="container">
        <a href="index.php?action=CmdPaginaInicialUsu" class="brand-logo" id="logo">Logo</a>
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
          <li><a href="index.php?action=CmdLogin">Iniciar<i class="material-icons right">account_circle</i></a></li>
          <li><a href="index.php?action=CmdRegistrarse">Registrarse<i class="material-icons right">account_circle</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="index.php?action=CmdLogin">Iniciar<i class="material-icons">contacts</i></a></li>
    <li><a href="index.php?action=CmdRegistrarse">Registrarse<i class="material-icons">account_circle</i></a></li>
  </ul>

  <!---->

  <div class="container">
    <p>75% de descuento</p>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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

      <div class="col s12 m6 l4 hide-on-med-and-down">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
    </div>

    <p>50% de descuento</p>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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

      <div class="col s12 m6 l4 hide-on-med-and-down">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
    </div>
    <p>25% de descuento</p>
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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

      <div class="col s12 m6 l4 hide-on-med-and-down">
        <div class="card hoverable">
          <div class="card-image waves-effect waves-block waves-light">
            <div class="boton">
              <img src="web/images/card/hat-1.jpg" alt="">
              <div class="overlay">
                <div class="botones">
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">add_shopping_cart</i></a>
                  <a href="index.php?action=CmdProductoDesc" class="fa"><i class="material-icons white-text">forward</i></a>
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
                  <a href="index.php?action=CmdVerPromociones">Inicio</a>
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
 type="text/javascript" src="web/js/init.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2018-11-09 05:29:57
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\usuario_index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be50d4570e792_14913433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '754b6f0694e62a04c51168416df9ad8d8f0ffdff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\usuario_index.html',
      1 => 1541737796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be50d4570e792_14913433 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_home_products')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.home_products.php';
if (!is_callable('smarty_function_home_categorics')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.home_categorics.php';
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
        <div class="right hide-on-large-only" id="buscarl">
          <ul>
            <li><a href="#" id="search-icon-s"> <i class="material-icons">search</i></a></li>
          </ul>
        </div>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#" id="search-icon"> <i class="material-icons">search</i></a></li>
          <li><a class='dropdown-trigger' href='#' data-target='usuario'>John Doe <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="index.php?action=CmdCuentaUsu">Cuenta</a></li>
    <li><a href="index.php?action=CmdFactura">Facturas</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="index.php?action=CmdReportarUsu">Reportar</a></li>
    <li><a href="index.php?action=CmdCarritoUsu">Carrito</a></li>
    <li><a href="index.php?action=CmdSalirUsu">Salir</a></li>
  </ul>

  <!-- Campos dropdown -->
  <ul id='usuario' class='dropdown-content'>
    <li><a href="index.php?action=CmdCuentaUsu">Cuenta</a></li>
    <li><a href="index.php?action=CmdFactura">Facturas</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="index.php?action=CmdReportarUsu">Reportar</a></li>
    <li><a href="index.php?action=CmdCarritoUsu">Carrito</a></li>
    <li><a href="index.php?action=CmdSalirUsu">Salir</a></li>
  </ul>


  <!--Carrousel-->
  <div class="slider">
    <ul class="slides blue">
      <li>
        <a href="index.php?action=CmdVerPromociones">
          <img src="https://canalcocina.es/medias/images/1511NoticiasLaTiendaDeCanalCocinaByCookingNoviembrePromoCocottes.jpg" class="img-responsive" alt="">
          <div class="caption left-align">
            <h3 style="color: #F9034F">¡Tenemos Descuentos Para Utensilios De Cocina!</h3>
          </div>
        </a>
      </li>

      <li>
        <a href="index.php?action=CmdVerPromociones">
          <img src="https://liquidazona.com/wp-content/uploads/2017/09/banner-promo-20-3.jpg" alt="">
          <div class="caption center-align">
            <h3 style="color: #F9034F">Queremos Hacerte Feliz</h3>
          </div>
        </a>
      </li>

      <li>
        <a href="index.php?action=CmdVerPromociones">
          <img src="https://agrocampo.vteximg.com.br/arquivos/10teatro.jpg?v=636518879734600000" class="responsive-img" alt="">
          <div class="caption right-align">
            <h3 style="color: #F9034F">Por que sabemos que te gusta el Entretenimiento</h3>
          </div>
        </a>
      </li>
    </ul>
  </div>


<!--Items de venta-->
        <?php echo smarty_function_home_products(array('title'=>"Productos",'table_name'=>"mco_productos",'command'=>"CmdProductoDesc",'parameters'=>0,'otherfun'=>'getAllProductsCategoria','count'=>6),$_smarty_tpl);?>


  
<!--Items de categorías-->
        <?php echo smarty_function_home_categorics(array('title'=>"Categorías",'table_name'=>"subdominios",'command'=>"CmdVerCategorias",'otherfun'=>'getAllCategorias','count'=>12),$_smarty_tpl);?>


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
                <a href="index.php?action=CmdPaginaInicialUsu">Inicio</a>
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

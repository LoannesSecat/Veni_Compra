<?php
/* Smarty version 3.1.30, created on 2018-11-07 19:51:29
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\carrito.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be334312199e2_03355908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80eb08919b72d1979c58b06236417ae7730e2bef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\carrito.html',
      1 => 1541280409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be334312199e2_03355908 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a href="usuario_index.html" class="brand-logo">Logo</a>
        <a href="" class="sidenav-trigger" data-target="menu">
          <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Ayuda <i class="material-icons right">help</i></a></li>
          <li><a href="">Contactanos <i class="material-icons right">contacts</i></a></li>
          <li><a class='dropdown-trigger' href='#' data-target='usuario'>John Doe <i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Campos dropdown -->
  <ul id='usuario' class='dropdown-content'>
    <li><a href="cuenta.html">Cuenta</a></li>
    <li><a href="factura.html">Facturas</a></li>
    <li class="divider" tabindex="-1"></li>
    <li><a href="reportar.html">Reportar</a></li>
    <li><a href="carrito.html">Carrito</a></li>
    <li><a href="index.html">Salir</a></li>
  </ul>

  <div class="container">
    <div class="card-panel hoverable">
      <div class="card-content">
        <form action="">
          <table class="responsive-table">
            <thead>
              <tr>
                <th>#</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>
                  <span>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                    </label>
                  </span>
                </td>
                <td>Alvin</td>
                <td>
                  <div class="input-field">
                    <input type="number" id="cantidad" style="width:50px;">
                  </div>
                </td>
                <td>
                  <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                    </label>
                  </span>
                </td>
                <td>Alvin</td>
                <td>
                  <div class="input-field">
                    <input type="number" id="cantidad" style="width:50px;">
                  </div>
                </td>
                <td>
                  <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <span>
                    <label>
                      <input type="checkbox" />
                      <span></span>
                    </label>
                  </span>
                </td>
                <td>Alvin</td>
                <td>
                  <div class="input-field">
                    <input type="number" id="cantidad" style="width:50px;">
                  </div>
                </td>
                <td>
                  <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                </td>
              </tr>
            </tbody>
          </table>
          <span>Total 1203430</span>
          <a href="" class="btn right" type="submit" style="margin-left: 10px;">Eliminar</a>
          <a href="" class="btn right" type="submit" style="margin-left: 10px;">Actualizar</a>
          <br>
        </form>
      </div>
    </div>
  </div>



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

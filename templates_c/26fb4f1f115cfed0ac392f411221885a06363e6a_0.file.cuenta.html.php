<?php
/* Smarty version 3.1.30, created on 2018-11-07 19:51:11
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\cuenta.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be3341faf5c63_51853739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fb4f1f115cfed0ac392f411221885a06363e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\cuenta.html',
      1 => 1541280405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be3341faf5c63_51853739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
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
          <li><a href="#">Contactanos <i class="material-icons right">contacts</i></a></li>
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
    <br>
    <a href="#cambion" class="waves-effect waves-light btn modal-trigger">Cambiar nombre usuario</a>
    <a href="#cambioc" class="waves-effect waves-light btn modal-trigger">Cambiar contraseña</a>
    <a href="#infoc" class="waves-effect waves-light btn modal-trigger">Informacion de contacto</a>
  </div>
  
  <div id="infoc" class="modal">
    <div class="modal-content">
      <h4>Cambio informacion de contacto</h4>
      <span>Por favor ingrese su nuevas crendenciales</span>
      <form action="">
        <div class="input-field">
          <input type="email" id="correoe">
          <label for="correoe">Correo electronico</label>
        </div>
        <label for="">Sexo</label>
        <span>
          <label>
            <input name="group1" type="radio" checked />
            <span>Hombre</span>
          </label>
        </span>
        <span>
          <label>
            <input name="group1" type="radio" />
            <span>Mujer</span>
          </label>
        </span>
        <div class="input-field">
          <input type="number" id="tel">
          <label for="tel">Telefono</label>
        </div>
        <div class="input-field">
          <input type="date" id="fechan">
          <label for="fechan">Fecha de nacimiento</label>
        </div>
        <div class="input-field">
          <input type="password" id="confirm">
          <label for="confirm">Ingrese su contraseña</label>
        </div>
        <a href="#" type="submit" class="btn">Guardar cambios</a>
      </form>
    </div>
  </div>

  <div id="cambion" class="modal">
    <div class="modal-content">
      <h4>Cambio de nombre usuario</h4>
      <span>Por favor ingrese su nuevas crendenciales</span>
      <form action="">
        <div class="input-field">
          <input type="text" id="nnombre">
          <label for="nnombre">Nuevo nombre</label>
        </div>
        <div class="input-field">
          <input type="password" id="confirm">
          <label for="confirm">Ingrese su contraseña</label>
        </div>
        <a href="#" type="submit" class="btn">Guardar cambios</a>
      </form>
    </div>
  </div>

  <div id="cambioc" class="modal">
    <div class="modal-content">
      <h4>Cambio de contraseña</h4>
      <span>Por favor ingrese su nuevas crendenciales</span>
      <form action="">
        <div class="input-field">
          <input type="password" id="confirm">
          <label for="confirm">Contraseña actual</label></div>
        <div class="input-field">
          <input type="password" id="confirm">
          <label for="confirm">Nueva contraseña</label>
        </div>
        <a href="#" type="submit" class="btn">Guardar cambios</a>
      </form>
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

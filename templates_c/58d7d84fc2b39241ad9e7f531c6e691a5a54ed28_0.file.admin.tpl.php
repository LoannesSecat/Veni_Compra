<?php
/* Smarty version 3.1.30, created on 2018-11-07 21:13:42
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\admin.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be34776d915a6_53360201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58d7d84fc2b39241ad9e7f531c6e691a5a54ed28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\admin.tpl',
      1 => 1541621618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be34776d915a6_53360201 (Smarty_Internal_Template $_smarty_tpl) {
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta charset="utf-8">

</head>

<body>

  <nav class="nav-extended">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.html" class="brand-logo" id="logo">Logoppppp</a>
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
          <i class="material-icons">menu Pepe Grillo</i>
        </a>
        <div class="right hide-on-large-only">
          <ul>
            <li><a href="#" id="search-icon-s"> <i class="material-icons">search</i></a></li>
          </ul>
        </div>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#" id="search-icon"> <i class="material-icons">search</i></a></li>
          <li><a href="admin.html">Agotados <span class="new badge">10</span></a></li>
          <li><a class='dropdown-trigger' href='#' data-target='usuario'>Administrador<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
      <div class="nav-content">
        <ul class="tabs tabs-transparent">
          <li class="tab col 3"><a href="#inventario" class="active">Inventario</a></li>
          <li class="tab col 2"><a href="#compras">Compras</a></li>
          <li class="tab col 2"><a href="#proveedores">Proveedores</a></li>
          <li class="tab col 2"><a href="#productos">Productos</a></li>
          <li class="tab col 3"><a href="#control">Control usuarios</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="admin.html">Gestion</a></li>
    <li><a href="index.html">Salir</a></li>
  </ul>
  
  <!-- Campos dropdown -->
  <ul id='usuario' class='dropdown-content'>
    <li><a href="admin_index.html">Gestion</a></li>
    <li><a href="index.html">Salir</a></li>
  </ul>

  <div id="inventario" class="col s12 container">
    <br>
    <section>
      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#ventas">Ventas</a></li>
          <li class="tab col s3"><a href="#promociones">Promociones</a></li>
          <li class="tab col s3"><a href="#estadistica">Estadistica de ventas</a></li>
        </ul>
      </div>
      <div id="ventas" class="col s12">
        <br>

        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <table>
          <thead>
            <tr>
              <th>Codigo venta</th>
              <th>Fecha</th>
              <th>Producto</th>
              <th>Cantidad</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>


      </div>

      <div id="promociones" class="col s12">
        <br>
        <table>
          <thead>
            <tr>
              <th>Producto</th>
              <th>Fecha ingreso</th>
              <th>Fecha modificacion</th>
              <th>Entidad que lo modifico</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Alvin</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div id="config" class="col s12">

      </div>

      <div id="estadistica" class="col s12">
        <br>
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      </div>
    </section>
  </div>

  <div id="compras" class="col s12 container">
    <br>
    <ul class="tabs">
      <li class="tab"><a href="#ingresarc">Ingresar compras</a></li>
      <li class="tab"><a href="#listarc">Compras</a></li>
    </ul>

    <div id="ingresarc">
      <form action="">
        <div class="input-field">
          <input type="number" id="codigo" />
          <label for="codigo">Codigo</label>
        </div>
        <div class="input-field">
          <input type="text" id="product" />
          <label for="product">Nombre producto</label>
        </div>
        <div class="input-field">
          <input type="text" id="proveedo" />
          <label for="proveedo">Proveedor</label>
        </div>
        <div class="input-field">
          <input type="number" id="cantid" />
          <label for="cantid">Cantidad</label>
        </div>
        <div class="input-field">
          <input type="date" id="fechain" />
          <label for="fechain">Fecha ingreso</label>
        </div>
        <a class="btn right" type="submit">Guardar producto</a>
      </form>
    </div>

    <div id="listarc">
      <br>
      <nav>
        <div class="nav-wrapper">
          <form>
            <div class="input-field">
              <input id="search" type="search" required>
              <label class="label-icon" for="search"><i class="material-icons">search</i></label>
              <i class="material-icons">close</i>
            </div>
          </form>
        </div>
      </nav>
      <section>
        <table>
          <thead>
            <tr>
              <th>Codigo compra</th>
              <th>Total compra</th>
              <th>Proveedor</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </section>
    </div>


  </div>

  <div id="proveedores" class="col s12 container">
    <section>
      <br>
      <ul class="tabs">
        <li class="tab col s6"><a href="#proveedor">Proveedores</a></li>
        <li class="tab col s6"><a href="#crearpro">Crear proveedor</a></li>
      </ul>


      <div id="proveedor" class="col">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <a href="#updat" class="waves-effect waves-light btn modal-trigger">Editar <i class="material-icons left">edit</i></a>
        <a href="#" class="waves-effect waves-light btn">Eliminar <i class="material-icons left">delete</i></a>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th>Proveedor</th>
              <th>Producto</th>
              <th>Telefono</th>
              <th>Direccion</th>
              <th>Ciudad</th>
              <th>Email</th>
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
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>


      <div id="crearpro" class="col">
        <form action="">
          <div class="input-field">
            <input type="number" id="codigo" />
            <label for="codigo">Codigo</label>
          </div>
          <div class="input-field">
            <input type="text" id="proveedor" />
            <label for="proveedor">Nombre proveedor</label>
          </div>
          <div class="input-field">
            <input type="text" id="telefono" />
            <label for="telefono">Telefono</label>
          </div>
          <div class="input-field">
            <input type="text" id="direccion" />
            <label for="direccion">Direccion</label>
          </div>
          <div class="input-field">
            <input type="text" id="ciudad" />
            <label for="ciudad">Ciudad</label>
          </div>
          <div class="input-field">
            <input type="email" id="email" />
            <label for="email">Correo</label>
          </div>
          <a class="btn right" type="submit">Guardar proveedor</a>
        </form>
      </div>
    </section>

  </div>

  <div id="productos" class="col s12 container">
    <br>
    <section>
      <ul class="tabs">
        <li class="tab col s2"><a href="#listap">Productos</a></li>
        <li class="tab col s2"><a href="#crearp">Crear producto</a></li>
        <li class="tab col s2"><a href="#crearo">Crear promocion</a></li>
        <li class="tab col s2"><a href="#productosd">Productos defectuosos</a></li>
        <li class="tab col s2"><a href="#productoa">Productos agotados</a></li>
      </ul>

      <div id="listap">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <table>
          <thead>
            <tr>
              <th>Id producto</th>
              <th>Nombre</th>
              <th>Cantidad</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
            </tr>
            <tr>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="productoa">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <a href="" class="btn">Hacer algo</a>
        <a href="" class="btn">Hacer otra cosa</a>
        <br>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
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
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
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
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="crearp">
        <br>
        <form action="">
          <div class="input-field">
            <input type="number" id="codigo" />
            <label for="codigo">Codigo</label>
          </div>
          <div class="input-field">
            <input type="text" id="nombrep" />
            <label for="nombrep">Nombre producto</label>
          </div>
          <div class="input-field">
            <input type="date" id="fechai" />
            <label for="fechaf">Fecha de ingresol</label>
          </div>
          <div class="input-field">
            <input type="text" id="precio" />
            <label for="precio">Precio</label>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagen producto</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn right" type="submit">Guardar producto</button>
        </form>
      </div>

      <div id="productosd">
        <br>
        <div class="row">
          <p style="padding: 0;">Reportes</p>

          <br>
          <a href="" class="btn">Aceptar reporte</a>
          <a href="" class="btn">Mostrar detalle</a>
          <div class="responsive-table">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id cliente</th>
                  <th>Nombre cliente</th>
                  <th>Fecha de reporte</th>
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
                  <td>Eclair</td>
                  <td>$0.87</td>
                  <td>$0.87</td>
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
                  <td>Jellybean</td>
                  <td>$3.76</td>
                  <td>$0.87</td>
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
                  <td>Lollipop</td>
                  <td>$7.00</td>
                  <td>$0.87</td>
                </tr>
              </tbody>
            </table>
            <br><br>
            <p>Detalle reporte</p>
            <div class="col l8">
              <span>Inconformidad : Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut
                labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Excepteur
                sint
              occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
              <br>
              <span>Fecha de reporte : 2018/20/12</span>
              <br>
              <span>Cliente : Anuel AA</span>
              <br>
            </div>

            <div class="col l4">
              <span class="center">Imagen adjunta</span>
              <img class="materialboxed responsive-img" src="https://img.milanuncios.com/fg/2553/84/255384180_1.jpg"
              alt="">
            </div>
          </div>
        </div>
      </div>

      <div id="crearo">
        <br>
        <form action="">
          <div class="input-field">
            <input type="number" id="codigo" />
            <label for="codigo">Codigo</label>
          </div>
          <div class="input-field">
            <input type="date" id="fechai" />
            <label for="fechai">Fecha inicial</label>
          </div>
          <div class="input-field">
            <input type="date" id="fechaf" />
            <label for="fechaf">Fecha final</label>
          </div>
          <div class="input-field">
            <input type="text" id="precio" />
            <label for="precio">Precio</label>
          </div>
          <div class="file-field input-field">
            <div class="btn">
              <span>Imagen producto</span>
              <input type="file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn right" type="submit">Guardar promocion</button>
        </form>
      </div>
    </section>
  </div>

  <div id="control" class="col s12 container">
    <section>
      <br>
      <ul class="tabs">
        <li class="tab col 4"><a href="#clientes">Clientes</a></li>
        <li class="tab col 4"><a href="#asesores">Asesores</a></li>
        <li class="tab col 4"><a href="#administradores">Administradores</a></li>
      </ul>

      <div id="clientes" class="col 12">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" placeholder="filtrar usuarios" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <a href="#" class="waves-effect waves-light btn">Desactivar <i class="material-icons left">person_add_disabled</i></a>
        <table class="responsive-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Genero</th>
              <th>Email</th>
              <th>Celular</th>
              <th>Nickname</th>
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
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="asesores" class="col 12">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" placeholder="filtrar usuarios" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <a href="#create" class="waves-effect waves-light btn modal-trigger">Crear <i class="material-icons left">person_add</i></a>
        <a href="#update" class="waves-effect waves-light btn modal-trigger">Editar <i class="material-icons left">edit</i></a>
        <a href="#" class="waves-effect waves-light btn">Eliminar <i class="material-icons left">delete</i></a>
        <a href="#" class="waves-effect waves-light btn">Desactivar <i class="material-icons left">person_add_disabled</i></a>
        <table class="responsive-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Genero</th>
              <th>Email</th>
              <th>Celular</th>
              <th>Nickname</th>
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
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div id="administradores">
        <br>
        <nav>
          <div class="nav-wrapper">
            <form>
              <div class="input-field">
                <input id="search" placeholder="filtrar usuarios" type="search" required>
                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
            </form>
          </div>
        </nav>
        <br>
        <a href="#create" class="waves-effect waves-light btn modal-trigger">Crear <i class="material-icons left">person_add</i></a>
        <a href="#update" class="waves-effect waves-light btn modal-trigger">Editar <i class="material-icons left">edit</i></a>
        <a href="#" class="waves-effect waves-light btn modal-trigger">Eliminar <i class="material-icons left">delete</i></a>
        <a href="#" class="waves-effect waves-light btn">Desactivar <i class="material-icons left">person_add_disabled</i></a>
        <table class="responsive-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Codigo</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Genero</th>
              <th>Email</th>
              <th>Celular</th>
              <th>Nickname</th>
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
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Alan</td>
              <td>Jellybean</td>
              <td>$3.76</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
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
              <td>Jonathan</td>
              <td>Lollipop</td>
              <td>$7.00</td>
              <td>$0.87</td>
              <td>Eclair</td>
              <td>$0.87</td>
              <td>$0.87</td>
            </tr>
          </tbody>
        </table>

      </div>
    </section>
  </div>

  <div class="modal" id="create">
    <div class="modal-content">
      <form action="">
        <input type="hidden" value="asesor">
        <div class="input-field">
          <input type="text" id="nameu">
          <label for="nameu">Nombres</label>
        </div>
        <div class="input-field">
          <input type="text" id="lastn">
          <label for="lastn">Apellido</label>
        </div>

        <div class="input-field">
          <input type="email" id="correou">
          <label for="correou">Correo</label>
        </div>
        <div class="input-field">
          <input type="password" id="passu">
          <label for="passu">Contraseña</label>
        </div>
        <div class="input-field">
          <input type="number" id="phone">
          <label for="phone">Telefono</label>
        </div>
        <div class="input-field">
          <input type="text" id="direccion">
          <label for="direccion">Direccion</label>
        </div>
        <div class="input-field">
          <select>
            <option value="" disabled selected>Roles de usuario</option>
            <option value="1">Cliente</option>
            <option value="2">Asesor</option>
            <option value="3">Administrador</option>
          </select>
          <label>Rol del usuario</label>
        </div>
        <a href="#" type="submit" class="btn right">Guardar</a>
      </form>
      <br>
    </div>
  </div>

  <div class="modal" id="update">
    <div class="modal-content">
      <form action="">
        <div class="input-field">
          <input type="text" id="namea">
          <label for="namea">Codigo</label>
        </div>
        <div class="input-field">
          <input type="text" id="lastn">
          <label for="lastn">Apellido</label>
        </div>
        <span>
          <label>
            <input name="group1" type="radio" checked />
            <span>Masculino</span>
          </label>
        </span>
        <span>
          <label>
            <input name="group1" type="radio" />
            <span>Femenino</span>
          </label>
        </span>
        <div class="input-field">
          <input type="text" id="emailc">
          <label for="emailc">Correo</label>
        </div>
        <div class="input-field">
          <input type="password" id="passt">
          <label for="passt">Contraseña temporal</label>
        </div>
        <div class="input-field">
          <select>
            <option value="" disabled selected>Roles de usuario</option>
            <option value="1">Cliente</option>
            <option value="2">Asesor</option>
            <option value="3">Administrador</option>
          </select>
          <label>Rol del usuario</label>
        </div>
        <a href="#" class="btn right" type="submit">Guardar</a>
      </form>
      <br>
    </div>
  </div>

  <div id="updat" class="modal">
    <div class="modal-content">
      <form action="">
        <div class="input-field">
          <input type="text" id="proveedor" />
          <label for="proveedor">Nombre proveedor</label>
        </div>
        <div class="input-field">
          <input type="text" id="telefono" />
          <label for="telefono">Telefono</label>
        </div>
        <div class="input-field">
          <input type="text" id="direccion" />
          <label for="direccion">Direccion</label>
        </div>
        <div class="input-field">
          <input type="text" id="ciudad" />
          <label for="ciudad">Ciudad</label>
        </div>
        <div class="input-field">
          <input type="email" id="email" />
          <label for="email">Correo</label>
        </div>
        <button class="btn right" type="submit">Actualizar</button>
      </form>
    </div>
  </div>

  <!--Estadisticas-->
  <?php echo '<script'; ?>
 src="web/js/canvasjs.min.js"><?php echo '</script'; ?>
>
  <!--Chart-->
  <?php echo '<script'; ?>
>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
          text: "Ventas del año"
        },
        axisY: {
          title: "Metas de ventas",
          valueFormatString: "#0,,.",
          suffix: "mn",
          stripLines: [{
            value: 3366500,
            label: "Promedio"
          }]
        },
        data: [{
          yValueFormatString: "#,### Millones",
          xValueFormatString: "YYYY",
          type: "spline",
          dataPoints: [
          { x: new Date(2002, 0), y: 2506000 },
          { x: new Date(2003, 0), y: 2798000 },
          { x: new Date(2004, 0), y: 3386000 },
          { x: new Date(2005, 0), y: 6944000 },
          { x: new Date(2006, 0), y: 6026000 },
          { x: new Date(2007, 0), y: 2394000 },
          { x: new Date(2008, 0), y: 1872000 },
          { x: new Date(2009, 0), y: 2140000 },
          { x: new Date(2010, 0), y: 7289000 },
          { x: new Date(2011, 0), y: 4830000 },
          { x: new Date(2012, 0), y: 2009000 },
          { x: new Date(2013, 0), y: 2840000 },
          { x: new Date(2014, 0), y: 2396000 },
          { x: new Date(2015, 0), y: 1613000 },
          { x: new Date(2016, 0), y: 2821000 },
          { x: new Date(2017, 0), y: 2000000 }
          ]
        }]
      });
      chart.render();

    }
  <?php echo '</script'; ?>
>
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

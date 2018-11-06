<?php
/* Smarty version 3.1.30, created on 2018-10-14 23:04:25
  from "D:\webservers\xampp\htdocs\LitlePHP\applications\launcher\web\html\htmlConfig\menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc3af594d4ce5_19721876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a3a4eb2c86366f9b7a30c29c992b82b3069f02c' => 
    array (
      0 => 'D:\\webservers\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\htmlConfig\\menu.tpl',
      1 => 1539551063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc3af594d4ce5_19721876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<aside class="main-sidebar">

	 <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="web/template/AdminLTE/dist/img/jfmi.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Joe Mendoza</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
		<ul class="sidebar-menu" data-widget="tree">
		    <li class="header">MAIN NAVIGATION</li>	

			<li class="treeview">

				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>

			<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>

			<li>

				<a href="clientes">

					<i class="fa fa-users"></i>
					<span>Clientes</span>

				</a>

			</li>

			<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Ventas</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar ventas</span>

						</a>

					</li>

					<li>

						<a href="crear-venta">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear venta</span>

						</a>

					</li>

					<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de ventas</span>

						</a>

					</li>

				</ul>

			</li>

		</ul>

	 </section>

</aside><?php }
}

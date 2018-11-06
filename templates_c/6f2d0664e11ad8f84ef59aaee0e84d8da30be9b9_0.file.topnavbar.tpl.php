<?php
/* Smarty version 3.1.30, created on 2018-10-14 23:03:22
  from "D:\webservers\xampp\htdocs\LitlePHP\applications\launcher\web\html\htmlConfig\topnavbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc3af1ab90743_31342858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f2d0664e11ad8f84ef59aaee0e84d8da30be9b9' => 
    array (
      0 => 'D:\\webservers\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\htmlConfig\\topnavbar.tpl',
      1 => 1539550998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc3af1ab90743_31342858 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>

	</a>

	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						
						<img src="web/template/AdminLTE/dist/img/jfmi.png" class="user-image">

						<span class="hidden-xs">Usuario Administrador</span>

					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
						<li class="user-body">
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header><?php }
}

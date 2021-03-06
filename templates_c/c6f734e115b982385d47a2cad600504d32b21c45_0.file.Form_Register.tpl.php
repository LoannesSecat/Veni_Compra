<?php
/* Smarty version 3.1.30, created on 2018-10-24 00:22:19
  from "C:\xampp\htdocs\LitlePHP\applications\launcher\web\html\Form_Register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bcf9f1b735264_82152927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6f734e115b982385d47a2cad600504d32b21c45' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\Form_Register.tpl',
      1 => 1540333333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcf9f1b735264_82152927 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_select_row_table')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\plugins\\function.select_row_table.php';
if (!is_callable('smarty_function_messagebox')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\plugins\\function.messagebox.php';
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "Templates.lan", "register", 0);
?>

{}

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</title>
  <!-- Tell the browser to be responsive to screen width -->
  <!-- Bootstrap 3.3.7 -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="web/template/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="web/template/AdminLTE/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="web/template/AdminLTE/plugins/iCheck/square/blue.css">


  <!-- Alertify -->  
  <?php echo '<script'; ?>
 src="./web/template/AdminLTE/plugins/alertify/alertify.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.css" />
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.core.css" />      
  <link rel="stylesheet" href="./web/template/AdminLTE/plugins/alertify/alertify.default.css" />  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition register-page">

  <div class="register-box">

    <div class="register-logo">
      <p><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE2');?>
</p>
    </div>

    <div class="register-box-body">

      <p class="login-box-msg"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE3');?>
</p>

      <form action="index.php" method="post">

        <input type="hidden" name="action" value="CmdRegister">
        <!--Nombres-->
        <div class="form-group has-feedback">
          <input type="text" name="nombres" size="20" maxlength="20" class="form-control" placeholder="Nombres">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <!--Apellidos-->
        <div class="form-group has-feedback">
          <input type="text" name="apellidos" size="20" maxlength="20" class="form-control" placeholder="Apellidos">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <!--Telefono-->
        <div class="form-group has-feedback">
          <input type="number" name="telefono" size="20" maxlength="20" class="form-control" placeholder="Telefono">
          <span class="glyphicon glyphicon-phone form-control-feedback"></span>
        </div>
        <!--Tipo Identificación-->
        <div class="form-group has-feedback">
          <label for="usuario_USUATIPO_FK">Tipo de identificaci&oacuten</label>
          
          <?php echo smarty_function_select_row_table(array('name'=>"usuarios_USUATIPO_FK",'table_name'=>"tipos",'value'=>"TIPOSID",'label'=>"TIPOSDESC",'class'=>"form-control",'parameters'=>2,'otherfun'=>'getTIPOSBYtipo'),$_smarty_tpl);?>


        </div>
        <!--Identificación-->
        <div class="form-group has-feedback">
          <input type="number" name="identificacion" size="20" maxlength="20" class="form-control" placeholder="Identificación">
          <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
        </div>
        <!--Correo-->
        <div class="form-group has-feedback">
          <input type="email" name="correo" size="20" maxlength="20" class="form-control" placeholder="Correo">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <!--Contraseña-->
        <div class="form-group has-feedback">
          <input type="password" name="contraseña" size="20" maxlength="20" class="form-control" placeholder="Contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
                <!--Contraseña Confirmar-->
        <div class="form-group has-feedback">
          <input type="password" name="contraseñaconfir" size="20" maxlength="20" class="form-control" placeholder="Confirmar contraseña">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <!--Ciudad-->
        <div class="form-group has-feedback">
          <label for="usuario_USUACIUDAD_FK">Ciudad</label>
          
          <?php echo smarty_function_select_row_table(array('name'=>"usuarios_USUACIUDAD_FK",'table_name'=>"ciudades",'value'=>"CIUDID",'label'=>"CIUDNOMB",'class'=>"form-control",'otherfun'=>'getAllCiudades'),$_smarty_tpl);?>


        </div>
        <!--Direccion-->
        <div class="form-group has-feedback">
          <input type="text" name="direccion" size="20" maxlength="20" class="form-control" placeholder="Direccion">
          <span class="glyphicon glyphicon-map-marker form-control-feedback"></span>
        </div>
        <!--Boton registrar-->
        <div class="form-group has-feedback">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'REGISTER');?>
</button>        
        </div>

      </form>

      <div class="form-group has-feedback">
        <a href="index.php" class="text-center"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'YATENGO');?>
</a>
      </div>

    </div>
    <!-- /.form-box -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery 3 -->
  <?php echo '<script'; ?>
 src="../../bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- Bootstrap 3.3.7 -->
  <?php echo '<script'; ?>
 src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!-- iCheck -->
  <?php echo '<script'; ?>
 src="../../plugins/iCheck/icheck.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>

    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });

  <?php echo '</script'; ?>
>
 <?php echo smarty_function_messagebox(array('id'=>$_smarty_tpl->tpl_vars['cod_message']->value),$_smarty_tpl);?>

</body>
</html>
<?php }
}

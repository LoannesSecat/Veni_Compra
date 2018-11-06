<?php
/* Smarty version 3.1.30, created on 2018-10-14 22:56:23
  from "D:\webservers\xampp\htdocs\LitlePHP\applications\launcher\web\html\default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc3ad7734f336_99563336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d9f05e6814ef5b3ecf95bfb4c824040d7c0ca09' => 
    array (
      0 => 'D:\\webservers\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\default.tpl',
      1 => 1539550486,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlConfig/header.tpl' => 1,
    'file:htmlConfig/topnavbar.tpl' => 1,
    'file:htmlConfig/menu.tpl' => 1,
    'file:htmlConfig/footer.tpl' => 1,
  ),
),false)) {
function content_5bc3ad7734f336_99563336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!DOCTYPE html>
<html>
<!--=====================================
   Here Document Heder Template
 ======================================-->  
 <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- =============================================
     Here Document Top Nav Bar Template
    ============================================= -->

    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/topnavbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <!-- =============================================== -->

    <!--=============================================
                    MENU
    =============================================-->

    <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <!--=============================================
                BEGIN MAIN CONTENT
    =============================================-->

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99774315bc3ad7734ddc2_34647076', "content");
?>


    <!-- =============================================
                END MAIN CONTENT
    =============================================-->


     <!--=====================================
       Here Document Footer Template
     ======================================-->  
     <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<?php }
/* {block "content"} */
class Block_99774315bc3ad7734ddc2_34647076 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
  <?php
}
}
/* {/block "content"} */
}

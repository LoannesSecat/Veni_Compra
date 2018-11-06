<?php
/* Smarty version 3.1.30, created on 2018-10-14 22:27:33
  from "D:\webservers\xampp\htdocs\LitlePHP\applications\launcher\web\html\Form_Default_Sample.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bc3a6b598a887_41382604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df5027704ba82945a8b0927147f69a81d1c4f7b0' => 
    array (
      0 => 'D:\\webservers\\xampp\\htdocs\\LitlePHP\\applications\\launcher\\web\\html\\Form_Default_Sample.tpl',
      1 => 1539548829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:default.tpl' => 1,
  ),
),false)) {
function content_5bc3a6b598a887_41382604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8869980645bc3a6b598a278_05823067', "content");
?>


web/template/AdminLTE/<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_8869980645bc3a6b598a278_05823067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      DashBoard
      
      <small>Control Panel</small>
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      
      <li class="active">DashBoard</li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Title</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                  title="Collapse">
            <i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Start creating your amazing application!
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        Footer
      </div>
      <!-- /.box-footer-->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
}
}
/* {/block "content"} */
}

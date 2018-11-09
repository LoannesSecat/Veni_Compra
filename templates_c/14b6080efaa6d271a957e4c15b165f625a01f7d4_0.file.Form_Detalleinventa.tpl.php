<?php
/* Smarty version 3.1.30, created on 2018-10-31 19:51:31
  from "C:\xampp\htdocs\LitlePHP\applications\veni_compra\web\html\Form_Detalleinventa.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bd9f9b3db5e95_93144149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b6080efaa6d271a957e4c15b165f625a01f7d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_Detalleinventa.tpl',
      1 => 1541011890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Form_TopMenu.tpl' => 1,
    'file:Form_FooterMenu.tpl' => 1,
  ),
),false)) {
function content_5bd9f9b3db5e95_93144149 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\block.form.php';
if (!is_callable('smarty_function_tools_barstandardsp')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tools_barstandardsp.php';
if (!is_callable('smarty_function_textfield')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.textfield.php';
if (!is_callable('smarty_function_tooltip')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tooltip.php';
if (!is_callable('smarty_function_calendar')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.calendar.php';
if (!is_callable('smarty_function_hidden')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.hidden.php';
if (!is_callable('smarty_function_messagebox')) require_once 'C:\\xampp\\htdocs\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.messagebox.php';
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "Templates.lan", "detalleinventa", 0);
?>

<html>
<head>
  <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <?php echo '<script'; ?>
 language='JavaScript' src='web/js/libCalendar.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language='JavaScript' src='web/js/libCalendarPopupCode.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language='JavaScript' src='web/js/disableButtons.js'><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 language='JavaScript' src='web/js/overlib.js'><?php echo '</script'; ?>
>
  
</head>
<body>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" class1=adminlist>
    <tr>
      <td align="center">
       <table width="1024" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
           <?php $_smarty_tpl->_subTemplateRender("file:Form_TopMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


           <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"frmDetalleinventa",'method'=>"post"));
$_block_repeat1=true;
echo smarty_block_form(array('name'=>"frmDetalleinventa",'method'=>"post"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>


           <?php echo smarty_function_tools_barstandardsp(array('type'=>"Button",'reference_id'=>100,'form_name'=>"frmDetalleinventa",'commands'=>"vc2CmdAddDetalleinventa,vc2CmdShowListDetalleinventa,vc2CmdHelpDetalleinventa",'images'=>"save_f2.png,back_f2.png,help_f2.png",'titles'=>"save,back,help"),$_smarty_tpl);?>


         <div class="main">
          <table class="adminheading">
            <tr>
             <th class="frontpage" rowspan="2">
              <img src="./web/images/menu/menu.png" </img>
              <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>

            </th>

          </tr>

        </table>

        <div>

          <table border="0" align="center" width=50% class="adminform">



           


           <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_ID');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_ID",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_ID"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_ID');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__PDU_ID",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_ID"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'INV_ID');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__INV_ID",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"INV_ID"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_LOTE');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_LOTE",'class'=>"campos",'maxlength'=>"15"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_LOTE"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_CANTIDAD');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_CANTIDAD",'class'=>"campos",'maxlength'=>"11",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_CANTIDAD"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_PRECIOVENTA');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_PRECIOVENTA",'class'=>"campos",'maxlength'=>"11",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_PRECIOVENTA"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_FECHA_CADU');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_calendar(array('name'=>"detalleinventa__DIN_FECHA_CADU",'class'=>"campos",'form_name'=>"frmDetalleinventa",'format_date'=>"YYYY-MM-DD",'icon'=>"web/images/"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_FECHA_CADU"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_EXIS_BIEN');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_EXIS_BIEN",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_EXIS_BIEN"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_EXIS_MAL');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_EXIS_MAL",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_EXIS_MAL"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_DEVOL_COMP');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_DEVOL_COMP",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_DEVOL_COMP"),$_smarty_tpl);?>
</td>
          </tr>


          <tr>
            <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'DIN_DEVOL_VENT');?>
(*)</td>
            <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"detalleinventa__DIN_DEVOL_VENT",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"DIN_DEVOL_VENT"),$_smarty_tpl);?>
</td>
          </tr>
        </table>



        <?php echo smarty_function_hidden(array('name'=>"action",'value'=>''),$_smarty_tpl);?>

        <?php echo smarty_function_hidden(array('name'=>"section_language",'value'=>"Detalleinventa"),$_smarty_tpl);?>

        <?php $_block_repeat1=false;
echo smarty_block_form(array('name'=>"frmDetalleinventa",'method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


        <?php echo smarty_function_messagebox(array('id'=>$_smarty_tpl->tpl_vars['cod_message']->value),$_smarty_tpl);?>


        

        <div id="border-bottom">
          <div>
            <div>
            </div>
          </div>
        </div>

      </td>
    </tr>
  </table>
  <?php $_smarty_tpl->_subTemplateRender("file:Form_FooterMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <td>
    <tr>
    </table>

  </body>
  </html>
<?php }
}

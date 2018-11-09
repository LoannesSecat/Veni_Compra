
{config_load file="Templates.lan" section="mco_comprasdeta"}
<html>
<head>
      <title>{#TITLE#}</title>
      {meta}
      <script language='JavaScript' src='web/js/disableButtons.js'></script>
      <script language='JavaScript' src='web/js/overlib.js'></script>
	  
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class1=adminlist>
  <tr>
    <td align="center">
       <table width="1024" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
               {include file="Form_TopMenu.tpl" }

{form name="frmMco_comprasdeta" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMco_comprasdeta"
                        commands="vc2CmdAddMco_comprasdeta,vc2CmdShowListMco_comprasdeta,vc2CmdHelpMco_comprasdeta"
                        images="save_f2.png,back_f2.png,help_f2.png" 
                        titles="save,back,help"  
   }

   <div class="main">
		<table class="adminheading">
		<tr>
			<th class="frontpage" rowspan="2">
            <img src="./web/images/menu/menu.png" </img>
			{#TITLE#}
            </th>

		</tr>

		</table>

  <div>

<table border="0" align="center" width=50% class="adminform">



   


   <tr>
      <td class="dvtCellLabel">{#CDE_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasdeta__CDE_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="CDE_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#CDE_CANTIDAD#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasdeta__CDE_CANTIDAD" class="campos" maxlength="10" typeData="int"}{tooltip code="CDE_CANTIDAD"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#CDE_PRECIOCOMPR#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasdeta__CDE_PRECIOCOMPR" class="campos" maxlength="10" typeData="int"}{tooltip code="CDE_PRECIOCOMPR"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#COP_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasdeta__COP_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="COP_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasdeta__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mco_comprasdeta"}
{/form}

   {messagebox id=$cod_message}

{spyro_info}

<div id="border-bottom">
    <div>
      <div>
      </div>
      </div>
  </div>

          </td>
       </tr>
      </table>
            {include file="Form_FooterMenu.tpl" }

    <td>
  <tr>
</table>

</body>
</html>

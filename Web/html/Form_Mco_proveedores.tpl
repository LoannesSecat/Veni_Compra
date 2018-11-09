
{config_load file="Templates.lan" section="mco_proveedores"}
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

{form name="frmMco_proveedores" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMco_proveedores"
                        commands="vc2CmdAddMco_proveedores,vc2CmdShowListMco_proveedores,vc2CmdHelpMco_proveedores"
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
      <td class="dvtCellLabel">{#PVE_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PVE_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_NOMBRE#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_NOMBRE" class="campos" maxlength="45"}{tooltip code="PVE_NOMBRE"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_DIRECCION#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_DIRECCION" class="campos" maxlength="45"}{tooltip code="PVE_DIRECCION"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_TELEFONO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_TELEFONO" class="campos" maxlength="15"}{tooltip code="PVE_TELEFONO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_CELULAR#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_CELULAR" class="campos" maxlength="15"}{tooltip code="PVE_CELULAR"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_EMAIL#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_proveedores__PVE_EMAIL" class="campos" maxlength="45"}{tooltip code="PVE_EMAIL"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mco_proveedores"}
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

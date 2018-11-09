
{config_load file="Templates.lan" section="mve_facturasdet"}
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

{form name="frmMve_facturasdet" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMve_facturasdet"
                        commands="vc2CmdAddMve_facturasdet,vc2CmdShowListMve_facturasdet,vc2CmdHelpMve_facturasdet"
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
      <td class="dvtCellLabel">{#FDE_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__FDE_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="FDE_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FDE_CANTIDAD#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__FDE_CANTIDAD" class="campos" maxlength="10" typeData="int"}{tooltip code="FDE_CANTIDAD"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FDE_PRECIOUNITA#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__FDE_PRECIOUNITA" class="campos" maxlength="10" typeData="int"}{tooltip code="FDE_PRECIOUNITA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FAC_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__FAC_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="FAC_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PPM_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturasdet__PPM_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="PPM_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mve_facturasdet"}
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

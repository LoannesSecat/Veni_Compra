
{config_load file="Templates.lan" section="mve_facturas"}
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

{form name="frmMve_facturas" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMve_facturas"
                        commands="vc2CmdAddMve_facturas,vc2CmdShowListMve_facturas,vc2CmdHelpMve_facturas"
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
      <td class="dvtCellLabel">{#FAC_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturas__FAC_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="FAC_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FAC_FECHACOMPRA#}(*)</td>
      <td class="dvtCellInfo">{calendar name="mve_facturas__FAC_FECHACOMPRA" class="campos" form_name="frmMve_facturas" format_date="YYYY-MM-DD" time_comp="true" icon="web/images/"}{tooltip code="FAC_FECHACOMPRA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FAC_TOTAL#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturas__FAC_TOTAL" class="campos" maxlength="10" typeData="int"}{tooltip code="FAC_TOTAL"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_TIPOPAGO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturas__SUB_TIPOPAGO" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_TIPOPAGO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mve_facturas__USU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="USU_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mve_facturas"}
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

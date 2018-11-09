
{config_load file="Templates.lan" section="mco_comprasprov"}
<html>
<head>
      <title>{#TITLE#}</title>
      {meta}
	  <script language='JavaScript' src='web/js/libCalendar.js'></script>
	  <script language='JavaScript' src='web/js/libCalendarPopupCode.js'></script>
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

{form name="frmMco_comprasprov" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMco_comprasprov"
                        commands="vc2CmdAddMco_comprasprov,vc2CmdShowListMco_comprasprov,vc2CmdHelpMco_comprasprov"
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
      <td class="dvtCellLabel">{#COP_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasprov__COP_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="COP_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#COP_FECHACOMPRA#}(*)</td>
      <td class="dvtCellInfo">{calendar name="mco_comprasprov__COP_FECHACOMPRA" class="campos" form_name="frmMco_comprasprov" format_date="YYYY-MM-DD" icon="web/images/"}{tooltip code="COP_FECHACOMPRA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#COP_TOTALCOMPRA#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasprov__COP_TOTALCOMPRA" class="campos" maxlength="10" typeData="int"}{tooltip code="COP_TOTALCOMPRA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasprov__USU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="USU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PVE_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_comprasprov__PVE_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PVE_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mco_comprasprov"}
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

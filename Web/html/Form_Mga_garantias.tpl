
{config_load file="Templates.lan" section="mga_garantias"}
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

{form name="frmMga_garantias" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMga_garantias"
                        commands="vc2CmdAddMga_garantias,vc2CmdShowListMga_garantias,vc2CmdHelpMga_garantias"
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
      <td class="dvtCellLabel">{#GAR_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__GAR_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="GAR_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#GAR_DESCRIPDEVO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__GAR_DESCRIPDEVO" class="campos" maxlength="80"}{tooltip code="GAR_DESCRIPDEVO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#GAR_CANTIDAD#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__GAR_CANTIDAD" class="campos" maxlength="11" typeData="int"}{tooltip code="GAR_CANTIDAD"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#GAR_FOTOESTADO#}(*)</td>
      <td class="dvtCellInfo">(sin componente){tooltip code="GAR_FOTOESTADO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#GAR_FECHASOLICI#}(*)</td>
      <td class="dvtCellInfo">{calendar name="mga_garantias__GAR_FECHASOLICI" class="campos" form_name="frmMga_garantias" format_date="YYYY-MM-DD" icon="web/images/"}{tooltip code="GAR_FECHASOLICI"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_ESTADO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__SUB_ESTADO" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_ESTADO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_RESPUESTA#}</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__SUB_RESPUESTA" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_RESPUESTA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#FAC_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mga_garantias__FAC_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="FAC_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mga_garantias"}
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

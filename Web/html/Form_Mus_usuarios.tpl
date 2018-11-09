
{config_load file="Templates.lan" section="mus_usuarios"}
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

{form name="frmMus_usuarios" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMus_usuarios"
                        commands="vc2CmdAddMus_usuarios,vc2CmdShowListMus_usuarios,vc2CmdHelpMus_usuarios"
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
      <td class="dvtCellLabel">{#USU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="USU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_NOMBRE#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_NOMBRE" class="campos" maxlength="45"}{tooltip code="USU_NOMBRE"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_APELLIDO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_APELLIDO" class="campos" maxlength="45"}{tooltip code="USU_APELLIDO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_FECHA_NACI#}(*)</td>
      <td class="dvtCellInfo">{calendar name="mus_usuarios__USU_FECHA_NACI" class="campos" form_name="frmMus_usuarios" format_date="YYYY-MM-DD" icon="web/images/"}{tooltip code="USU_FECHA_NACI"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_DIRECCION#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_DIRECCION" class="campos" maxlength="45"}{tooltip code="USU_DIRECCION"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_EMAIL#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_EMAIL" class="campos" maxlength="45"}{tooltip code="USU_EMAIL"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_CELULAR#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_CELULAR" class="campos" maxlength="45"}{tooltip code="USU_CELULAR"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#USU_CONTRASENA#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__USU_CONTRASENA" class="campos" maxlength="45"}{tooltip code="USU_CONTRASENA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_SEXO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__SUB_SEXO" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_SEXO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#ROL_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_usuarios__ROL_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="ROL_ID"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mus_usuarios"}
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

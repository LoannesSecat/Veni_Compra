
{config_load file="Templates.lan" section="subdominios"}
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

{form name="frmSubdominios" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmSubdominios"
                        commands="vc2CmdAddSubdominios,vc2CmdShowListSubdominios,vc2CmdHelpSubdominios"
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
      <td class="dvtCellLabel">{#SUB_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="subdominios__SUB_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#DOMINIOS_DOM_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="subdominios__DOMINIOS_DOM_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="DOMINIOS_DOM_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_VALOR#}(*)</td>
      <td class="dvtCellInfo">{textfield name="subdominios__SUB_VALOR" class="campos" maxlength="45"}{tooltip code="SUB_VALOR"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_DESCRIPCION#}(*)</td>
      <td class="dvtCellInfo">{textfield name="subdominios__SUB_DESCRIPCION" class="campos" maxlength="45"}{tooltip code="SUB_DESCRIPCION"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_AUX1#}</td>
      <td class="dvtCellInfo">{textfield name="subdominios__SUB_AUX1" class="campos" maxlength="45"}{tooltip code="SUB_AUX1"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_AUX2#}</td>
      <td class="dvtCellInfo">{textfield name="subdominios__SUB_AUX2" class="campos" maxlength="45"}{tooltip code="SUB_AUX2"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Subdominios"}
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

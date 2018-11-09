
{config_load file="Templates.lan" section="mus_comanper"}
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

{form name="frmMus_comanper" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMus_comanper"
                        commands="vc2CmdAddMus_comanper,vc2CmdShowListMus_comanper,vc2CmdHelpMus_comanper"
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
      <td class="dvtCellInfo">{textfield name="mus_comanper__COP_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="COP_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#COP_NOMBRE#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mus_comanper__COP_NOMBRE" class="campos" maxlength="45"}{tooltip code="COP_NOMBRE"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mus_comanper"}
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

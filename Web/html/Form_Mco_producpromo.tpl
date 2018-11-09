
{config_load file="Templates.lan" section="mco_producpromo"}
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

{form name="frmMco_producpromo" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMco_producpromo"
                        commands="vc2CmdAddMco_producpromo,vc2CmdShowListMco_producpromo,vc2CmdHelpMco_producpromo"
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
      <td class="dvtCellLabel">{#PPM_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_producpromo__PPM_ID" class="campos" maxlength="11" typeData="int"}{tooltip code="PPM_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_producpromo__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PPM_FECHAINI#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_producpromo__PPM_FECHAINI" class="campos" maxlength="10" typeData="int"}{tooltip code="PPM_FECHAINI"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PPM_FECHAFIN#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_producpromo__PPM_FECHAFIN" class="campos" maxlength="10" typeData="int"}{tooltip code="PPM_FECHAFIN"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PPM_PRECIOPROM#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_producpromo__PPM_PRECIOPROM" class="campos" maxlength="15" typeData="int"}{tooltip code="PPM_PRECIOPROM"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mco_producpromo"}
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

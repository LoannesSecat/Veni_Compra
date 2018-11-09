
{config_load file="Templates.lan" section="mco_productos"}
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

{form name="frmMco_productos" method="post"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMco_productos"
                        commands="vc2CmdAddMco_productos,vc2CmdShowListMco_productos,vc2CmdHelpMco_productos"
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
      <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_NOMBRE#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__PDU_NOMBRE" class="campos" maxlength="45"}{tooltip code="PDU_NOMBRE"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_DESCRIPCION#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__PDU_DESCRIPCION" class="campos" maxlength="150"}{tooltip code="PDU_DESCRIPCION"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_IMAGENPRODU#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__PDU_IMAGENPRODU" class="campos" maxlength="200"}{tooltip code="PDU_IMAGENPRODU"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#PDU_STOCKMINIMO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__PDU_STOCKMINIMO" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_STOCKMINIMO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_NOMBRECAT#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__SUB_NOMBRECAT" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_NOMBRECAT"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_UNIMEDIDA#}</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__SUB_UNIMEDIDA" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_UNIMEDIDA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_TALLA#}</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__SUB_TALLA" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_TALLA"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_GENERO#}</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__SUB_GENERO" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_GENERO"}</td>
   </tr>


   <tr>
      <td class="dvtCellLabel">{#SUB_ESTADO#}(*)</td>
      <td class="dvtCellInfo">{textfield name="mco_productos__SUB_ESTADO" class="campos" maxlength="10" typeData="int"}{tooltip code="SUB_ESTADO"}</td>
   </tr>
</table>



{hidden name="action" value=""}
{hidden name="section_language" value="Mco_productos"}
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

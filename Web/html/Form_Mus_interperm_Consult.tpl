
{config_load file="Templates.lan" section="mus_interperm"}
<html>
<head>
      <title>{#TITLECONSULT#}</title>
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
               <div class="clr"></div>

{form name="frmMus_interpermConsult" method="get"}

   {tools_barstandardsp type="Button" reference_id =100 
                        form_name="frmMus_interpermConsult"
                        commands="vc2CmdDefaultMus_interperm,vc2CmdShowByIdMus_interperm,vc2CmdDeleteMus_interperm,default,vc2CmdHelpMus_interperm"
                        images="new_f2.png,edit_f2.png,cancel_f2.png,back_f2.png,help_f2.png" 
                        titles="new,edit,del,back,help"  
   }

   <div class="main">
		<table class="adminheading">
		<tr>
			<th class="frontpage" rowspan="2">
            <img src="./web/images/menu/other.png" </img>
			{#TITLECONSULT#}
            </th>

		</tr>

		</table>

  </div>

<table border=0  cellpadding=0 align="center" class=adminlist width=100%>
        <tr align="right" colspan=2>
           <th colspan1=8 class="detailedViewHeader">
             <b> </b>
        </tr>
	<tr>
		<td>{consult_table_referenciasp type="LIST" 
                                        table_name="mus_interperm"
                                        llaves="INP_ID"
                                        form_name="frmMus_interpermConsult"
                                        command="vc2CmdShowListMus_interperm"     
                                        command_showbyid="vc2CmdShowByIdMus_interperm"
                                        DataGateway="mus_interperm"
                                        filter="INP_ID,INP_NOMBRE"
                                        titulos="INP_ID,INP_NOMBRE"
                                        cantidad_registros=20
                     }
        </td>
	</tr>

</table>

{hidden name="action" value=""}
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
               {include file="Form_FooterMenu.tpl"}


    <td>
  <tr>
</table>
</body>
</html>

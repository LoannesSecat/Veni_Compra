
{config_load file="Templates.lan" section="detalleinventa"}
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

           {form name="frmDetalleinventa" method="post"}

           {tools_barstandardsp type="Button" reference_id =100 
           form_name="frmDetalleinventa"
           commands="vc2CmdAddDetalleinventa,vc2CmdShowListDetalleinventa,vc2CmdHelpDetalleinventa"
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
            <td class="dvtCellLabel">{#DIN_ID#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="DIN_ID"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#PDU_ID#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__PDU_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="PDU_ID"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#INV_ID#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__INV_ID" class="campos" maxlength="10" typeData="int"}{tooltip code="INV_ID"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_LOTE#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_LOTE" class="campos" maxlength="15"}{tooltip code="DIN_LOTE"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_CANTIDAD#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_CANTIDAD" class="campos" maxlength="11" typeData="int"}{tooltip code="DIN_CANTIDAD"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_PRECIOVENTA#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_PRECIOVENTA" class="campos" maxlength="11" typeData="int"}{tooltip code="DIN_PRECIOVENTA"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_FECHA_CADU#}(*)</td>
            <td class="dvtCellInfo">{calendar name="detalleinventa__DIN_FECHA_CADU" class="campos" form_name="frmDetalleinventa" format_date="YYYY-MM-DD" icon="web/images/"}{tooltip code="DIN_FECHA_CADU"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_EXIS_BIEN#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_EXIS_BIEN" class="campos" maxlength="10" typeData="int"}{tooltip code="DIN_EXIS_BIEN"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_EXIS_MAL#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_EXIS_MAL" class="campos" maxlength="10" typeData="int"}{tooltip code="DIN_EXIS_MAL"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_DEVOL_COMP#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_DEVOL_COMP" class="campos" maxlength="10" typeData="int"}{tooltip code="DIN_DEVOL_COMP"}</td>
          </tr>


          <tr>
            <td class="dvtCellLabel">{#DIN_DEVOL_VENT#}(*)</td>
            <td class="dvtCellInfo">{textfield name="detalleinventa__DIN_DEVOL_VENT" class="campos" maxlength="10" typeData="int"}{tooltip code="DIN_DEVOL_VENT"}</td>
          </tr>
        </table>



        {hidden name="action" value=""}
        {hidden name="section_language" value="Detalleinventa"}
        {/form}

        {messagebox id=$cod_message}

        

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

<html>
<head>
       <title> Menu Principal</title>
      

      <script language='JavaScript' src='web/js/disableButtons.js'></script>

      <script language='JavaScript' src='web/js/overlib.js'></script>

      <script type="text/javascript" src='web/js/jsrsClient.js'></script>
	<link href="web/css/Spyrodefault.css.css" rel="stylesheet" type="text/css">
	<link href="web/css/template_css.css" rel="stylesheet" type="text/css">	  
	  
	   
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class1=adminlist>
  <tr>
    <td align="center">
       <table width="1024" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
               {include file="Form_TopMenu.tpl" }
			   

{form name="frmMenu" method="get"}


   <div class="main">
		<table class="adminheading">
		<tr>
			<th class="frontpage" rowspan="2">
            <img src="web/images/menu/menu.png" </img>
			Mi Menu 
            </th>

		</tr>

		</table>

  <div>

<table border="0" align="center" width=50% class="adminform">
  		<table class="adminform" width="100%">

		  <tr>

		    <td width="100%" valign="center">

			  <div id="cpanel">
 
		                   {btn_image name='vc2CmdShowListDetalleinventa'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Detalleinventa"

                           }
  
		                   {btn_image name='vc2CmdShowListDominios'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Dominios"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_comprasdeta'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_comprasdeta"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_comprasprov'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_comprasprov"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_inventario'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_inventario"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_producpromo'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_producpromo"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_productos'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_productos"

                           }
  
		                   {btn_image name='vc2CmdShowListMco_proveedores'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mco_proveedores"

                           }
  
		                   {btn_image name='vc2CmdShowListMga_garantias'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mga_garantias"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_comanper'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_comanper"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_interfcoman'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_interfcoman"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_interperm'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_interperm"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_roles'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_roles"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_rolinfcom'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_rolinfcom"

                           }
  
		                   {btn_image name='vc2CmdShowListMus_usuarios'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mus_usuarios"

                           }
  
		                   {btn_image name='vc2CmdShowListMve_facturas'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mve_facturas"

                           }
  
		                   {btn_image name='vc2CmdShowListMve_facturasdet'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Mve_facturasdet"

                           }
  
		                   {btn_image name='vc2CmdShowListSubdominios'

                                      image="web/images/menu/other.png"

                                      alt="vc2"

                                      label="Subdominios"

                           }
 
			  </div>

           </td>

          </tr>

        </table>
</table>
   {hidden name="action" value=""}
{/form}
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

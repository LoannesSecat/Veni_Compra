<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mve_facturas__FAC_ID != NULL) && ($mve_facturas__FAC_ID != "")){
           $mve_facturas_manager = Application::getDomainController('Mve_facturasManager'); 
           $mve_facturas_data = $mve_facturas_manager->getByIdMve_facturas($mve_facturas__FAC_ID); 
           
           $_REQUEST["mve_facturas__FAC_ID"] = $mve_facturas_data[0]["FAC_ID"];
           $_REQUEST["mve_facturas__FAC_FECHACOMPRA"] = $mve_facturas_data[0]["FAC_FECHACOMPRA"];
           $_REQUEST["mve_facturas__FAC_TOTAL"] = $mve_facturas_data[0]["FAC_TOTAL"];
           $_REQUEST["mve_facturas__SUB_TIPOPAGO"] = $mve_facturas_data[0]["SUB_TIPOPAGO"];
           $_REQUEST["mve_facturas__USU_ID"] = $mve_facturas_data[0]["USU_ID"];

        }else{
		
           $_REQUEST["mve_facturas__FAC_ID"] = WebSession::getProperty("mve_facturas__FAC_ID");
           $_REQUEST["mve_facturas__FAC_FECHACOMPRA"] = WebSession::getProperty("mve_facturas__FAC_FECHACOMPRA");
           $_REQUEST["mve_facturas__FAC_TOTAL"] = WebSession::getProperty("mve_facturas__FAC_TOTAL");
           $_REQUEST["mve_facturas__SUB_TIPOPAGO"] = WebSession::getProperty("mve_facturas__SUB_TIPOPAGO");
           $_REQUEST["mve_facturas__USU_ID"] = WebSession::getProperty("mve_facturas__USU_ID");		
        }
		
        WebSession::unsetProperty("mve_facturas__FAC_ID");
        WebSession::unsetProperty("mve_facturas__FAC_FECHACOMPRA");
        WebSession::unsetProperty("mve_facturas__FAC_TOTAL");
        WebSession::unsetProperty("mve_facturas__SUB_TIPOPAGO");
        WebSession::unsetProperty("mve_facturas__USU_ID");

        return "success";       
    }

}

?>	

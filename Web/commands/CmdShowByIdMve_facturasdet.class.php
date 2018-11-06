<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mve_facturasdet__FDE_ID != NULL) && ($mve_facturasdet__FDE_ID != "")){
           $mve_facturasdet_manager = Application::getDomainController('Mve_facturasdetManager'); 
           $mve_facturasdet_data = $mve_facturasdet_manager->getByIdMve_facturasdet($mve_facturasdet__FDE_ID); 
           
           $_REQUEST["mve_facturasdet__FDE_ID"] = $mve_facturasdet_data[0]["FDE_ID"];
           $_REQUEST["mve_facturasdet__FDE_CANTIDAD"] = $mve_facturasdet_data[0]["FDE_CANTIDAD"];
           $_REQUEST["mve_facturasdet__FDE_PRECIOUNITA"] = $mve_facturasdet_data[0]["FDE_PRECIOUNITA"];
           $_REQUEST["mve_facturasdet__FAC_ID"] = $mve_facturasdet_data[0]["FAC_ID"];
           $_REQUEST["mve_facturasdet__PDU_ID"] = $mve_facturasdet_data[0]["PDU_ID"];
           $_REQUEST["mve_facturasdet__PPM_ID"] = $mve_facturasdet_data[0]["PPM_ID"];

        }else{
		
           $_REQUEST["mve_facturasdet__FDE_ID"] = WebSession::getProperty("mve_facturasdet__FDE_ID");
           $_REQUEST["mve_facturasdet__FDE_CANTIDAD"] = WebSession::getProperty("mve_facturasdet__FDE_CANTIDAD");
           $_REQUEST["mve_facturasdet__FDE_PRECIOUNITA"] = WebSession::getProperty("mve_facturasdet__FDE_PRECIOUNITA");
           $_REQUEST["mve_facturasdet__FAC_ID"] = WebSession::getProperty("mve_facturasdet__FAC_ID");
           $_REQUEST["mve_facturasdet__PDU_ID"] = WebSession::getProperty("mve_facturasdet__PDU_ID");
           $_REQUEST["mve_facturasdet__PPM_ID"] = WebSession::getProperty("mve_facturasdet__PPM_ID");		
        }
		
        WebSession::unsetProperty("mve_facturasdet__FDE_ID");
        WebSession::unsetProperty("mve_facturasdet__FDE_CANTIDAD");
        WebSession::unsetProperty("mve_facturasdet__FDE_PRECIOUNITA");
        WebSession::unsetProperty("mve_facturasdet__FAC_ID");
        WebSession::unsetProperty("mve_facturasdet__PDU_ID");
        WebSession::unsetProperty("mve_facturasdet__PPM_ID");

        return "success";       
    }

}

?>	

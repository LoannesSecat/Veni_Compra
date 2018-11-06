<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdDetalleinventa {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($detalleinventa__DIN_ID != NULL) && ($detalleinventa__DIN_ID != "")){
           $detalleinventa_manager = Application::getDomainController('DetalleinventaManager'); 
           $detalleinventa_data = $detalleinventa_manager->getByIdDetalleinventa($detalleinventa__DIN_ID); 
           
           $_REQUEST["detalleinventa__DIN_ID"] = $detalleinventa_data[0]["DIN_ID"];
           $_REQUEST["detalleinventa__PDU_ID"] = $detalleinventa_data[0]["PDU_ID"];
           $_REQUEST["detalleinventa__INV_ID"] = $detalleinventa_data[0]["INV_ID"];
           $_REQUEST["detalleinventa__DIN_LOTE"] = $detalleinventa_data[0]["DIN_LOTE"];
           $_REQUEST["detalleinventa__DIN_CANTIDAD"] = $detalleinventa_data[0]["DIN_CANTIDAD"];
           $_REQUEST["detalleinventa__DIN_PRECIOVENTA"] = $detalleinventa_data[0]["DIN_PRECIOVENTA"];
           $_REQUEST["detalleinventa__DIN_FECHA_CADU"] = $detalleinventa_data[0]["DIN_FECHA_CADU"];
           $_REQUEST["detalleinventa__DIN_EXIS_BIEN"] = $detalleinventa_data[0]["DIN_EXIS_BIEN"];
           $_REQUEST["detalleinventa__DIN_EXIS_MAL"] = $detalleinventa_data[0]["DIN_EXIS_MAL"];
           $_REQUEST["detalleinventa__DIN_DEVOL_COMP"] = $detalleinventa_data[0]["DIN_DEVOL_COMP"];
           $_REQUEST["detalleinventa__DIN_DEVOL_VENT"] = $detalleinventa_data[0]["DIN_DEVOL_VENT"];

        }else{
		
           $_REQUEST["detalleinventa__DIN_ID"] = WebSession::getProperty("detalleinventa__DIN_ID");
           $_REQUEST["detalleinventa__PDU_ID"] = WebSession::getProperty("detalleinventa__PDU_ID");
           $_REQUEST["detalleinventa__INV_ID"] = WebSession::getProperty("detalleinventa__INV_ID");
           $_REQUEST["detalleinventa__DIN_LOTE"] = WebSession::getProperty("detalleinventa__DIN_LOTE");
           $_REQUEST["detalleinventa__DIN_CANTIDAD"] = WebSession::getProperty("detalleinventa__DIN_CANTIDAD");
           $_REQUEST["detalleinventa__DIN_PRECIOVENTA"] = WebSession::getProperty("detalleinventa__DIN_PRECIOVENTA");
           $_REQUEST["detalleinventa__DIN_FECHA_CADU"] = WebSession::getProperty("detalleinventa__DIN_FECHA_CADU");
           $_REQUEST["detalleinventa__DIN_EXIS_BIEN"] = WebSession::getProperty("detalleinventa__DIN_EXIS_BIEN");
           $_REQUEST["detalleinventa__DIN_EXIS_MAL"] = WebSession::getProperty("detalleinventa__DIN_EXIS_MAL");
           $_REQUEST["detalleinventa__DIN_DEVOL_COMP"] = WebSession::getProperty("detalleinventa__DIN_DEVOL_COMP");
           $_REQUEST["detalleinventa__DIN_DEVOL_VENT"] = WebSession::getProperty("detalleinventa__DIN_DEVOL_VENT");		
        }
		
        WebSession::unsetProperty("detalleinventa__DIN_ID");
        WebSession::unsetProperty("detalleinventa__PDU_ID");
        WebSession::unsetProperty("detalleinventa__INV_ID");
        WebSession::unsetProperty("detalleinventa__DIN_LOTE");
        WebSession::unsetProperty("detalleinventa__DIN_CANTIDAD");
        WebSession::unsetProperty("detalleinventa__DIN_PRECIOVENTA");
        WebSession::unsetProperty("detalleinventa__DIN_FECHA_CADU");
        WebSession::unsetProperty("detalleinventa__DIN_EXIS_BIEN");
        WebSession::unsetProperty("detalleinventa__DIN_EXIS_MAL");
        WebSession::unsetProperty("detalleinventa__DIN_DEVOL_COMP");
        WebSession::unsetProperty("detalleinventa__DIN_DEVOL_VENT");

        return "success";       
    }

}

?>	

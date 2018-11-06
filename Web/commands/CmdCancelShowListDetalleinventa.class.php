<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListDetalleinventa {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
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

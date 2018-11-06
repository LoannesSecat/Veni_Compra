<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mve_facturasdet__FDE_ID"] = WebSession::getProperty("mve_facturasdet__FDE_ID");
        $_REQUEST["mve_facturasdet__FDE_CANTIDAD"] = WebSession::getProperty("mve_facturasdet__FDE_CANTIDAD");
        $_REQUEST["mve_facturasdet__FDE_PRECIOUNITA"] = WebSession::getProperty("mve_facturasdet__FDE_PRECIOUNITA");
        $_REQUEST["mve_facturasdet__FAC_ID"] = WebSession::getProperty("mve_facturasdet__FAC_ID");
        $_REQUEST["mve_facturasdet__PDU_ID"] = WebSession::getProperty("mve_facturasdet__PDU_ID");
        $_REQUEST["mve_facturasdet__PPM_ID"] = WebSession::getProperty("mve_facturasdet__PPM_ID");
        
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

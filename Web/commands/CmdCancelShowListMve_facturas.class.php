<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mve_facturas__FAC_ID"] = WebSession::getProperty("mve_facturas__FAC_ID");
        $_REQUEST["mve_facturas__FAC_FECHACOMPRA"] = WebSession::getProperty("mve_facturas__FAC_FECHACOMPRA");
        $_REQUEST["mve_facturas__FAC_TOTAL"] = WebSession::getProperty("mve_facturas__FAC_TOTAL");
        $_REQUEST["mve_facturas__SUB_TIPOPAGO"] = WebSession::getProperty("mve_facturas__SUB_TIPOPAGO");
        $_REQUEST["mve_facturas__USU_ID"] = WebSession::getProperty("mve_facturas__USU_ID");
        
        WebSession::unsetProperty("mve_facturas__FAC_ID");
        WebSession::unsetProperty("mve_facturas__FAC_FECHACOMPRA");
        WebSession::unsetProperty("mve_facturas__FAC_TOTAL");
        WebSession::unsetProperty("mve_facturas__SUB_TIPOPAGO");
        WebSession::unsetProperty("mve_facturas__USU_ID");
        
        return "success";  
    }

}

?>	

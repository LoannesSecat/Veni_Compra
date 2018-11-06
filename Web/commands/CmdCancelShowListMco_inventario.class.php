<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_inventario {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_inventario__INV_ID"] = WebSession::getProperty("mco_inventario__INV_ID");
        $_REQUEST["mco_inventario__INV_NOMBRE"] = WebSession::getProperty("mco_inventario__INV_NOMBRE");
        
        WebSession::unsetProperty("mco_inventario__INV_ID");
        WebSession::unsetProperty("mco_inventario__INV_NOMBRE");
        
        return "success";  
    }

}

?>	

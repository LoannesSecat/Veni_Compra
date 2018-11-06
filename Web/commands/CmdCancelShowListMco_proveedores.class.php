<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_proveedores {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_proveedores__PVE_ID"] = WebSession::getProperty("mco_proveedores__PVE_ID");
        $_REQUEST["mco_proveedores__PVE_NOMBRE"] = WebSession::getProperty("mco_proveedores__PVE_NOMBRE");
        $_REQUEST["mco_proveedores__PVE_DIRECCION"] = WebSession::getProperty("mco_proveedores__PVE_DIRECCION");
        $_REQUEST["mco_proveedores__PVE_TELEFONO"] = WebSession::getProperty("mco_proveedores__PVE_TELEFONO");
        $_REQUEST["mco_proveedores__PVE_CELULAR"] = WebSession::getProperty("mco_proveedores__PVE_CELULAR");
        $_REQUEST["mco_proveedores__PVE_EMAIL"] = WebSession::getProperty("mco_proveedores__PVE_EMAIL");
        
        WebSession::unsetProperty("mco_proveedores__PVE_ID");
        WebSession::unsetProperty("mco_proveedores__PVE_NOMBRE");
        WebSession::unsetProperty("mco_proveedores__PVE_DIRECCION");
        WebSession::unsetProperty("mco_proveedores__PVE_TELEFONO");
        WebSession::unsetProperty("mco_proveedores__PVE_CELULAR");
        WebSession::unsetProperty("mco_proveedores__PVE_EMAIL");
        
        return "success";  
    }

}

?>	

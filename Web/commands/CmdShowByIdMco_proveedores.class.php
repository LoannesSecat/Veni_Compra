<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_proveedores {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_proveedores__PVE_ID != NULL) && ($mco_proveedores__PVE_ID != "")){
           $mco_proveedores_manager = Application::getDomainController('Mco_proveedoresManager'); 
           $mco_proveedores_data = $mco_proveedores_manager->getByIdMco_proveedores($mco_proveedores__PVE_ID); 
           
           $_REQUEST["mco_proveedores__PVE_ID"] = $mco_proveedores_data[0]["PVE_ID"];
           $_REQUEST["mco_proveedores__PVE_NOMBRE"] = $mco_proveedores_data[0]["PVE_NOMBRE"];
           $_REQUEST["mco_proveedores__PVE_DIRECCION"] = $mco_proveedores_data[0]["PVE_DIRECCION"];
           $_REQUEST["mco_proveedores__PVE_TELEFONO"] = $mco_proveedores_data[0]["PVE_TELEFONO"];
           $_REQUEST["mco_proveedores__PVE_CELULAR"] = $mco_proveedores_data[0]["PVE_CELULAR"];
           $_REQUEST["mco_proveedores__PVE_EMAIL"] = $mco_proveedores_data[0]["PVE_EMAIL"];

        }else{
		
           $_REQUEST["mco_proveedores__PVE_ID"] = WebSession::getProperty("mco_proveedores__PVE_ID");
           $_REQUEST["mco_proveedores__PVE_NOMBRE"] = WebSession::getProperty("mco_proveedores__PVE_NOMBRE");
           $_REQUEST["mco_proveedores__PVE_DIRECCION"] = WebSession::getProperty("mco_proveedores__PVE_DIRECCION");
           $_REQUEST["mco_proveedores__PVE_TELEFONO"] = WebSession::getProperty("mco_proveedores__PVE_TELEFONO");
           $_REQUEST["mco_proveedores__PVE_CELULAR"] = WebSession::getProperty("mco_proveedores__PVE_CELULAR");
           $_REQUEST["mco_proveedores__PVE_EMAIL"] = WebSession::getProperty("mco_proveedores__PVE_EMAIL");		
        }
		
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

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_inventario {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_inventario__INV_ID != NULL) && ($mco_inventario__INV_ID != "")){
           $mco_inventario_manager = Application::getDomainController('Mco_inventarioManager'); 
           $mco_inventario_data = $mco_inventario_manager->getByIdMco_inventario($mco_inventario__INV_ID); 
           
           $_REQUEST["mco_inventario__INV_ID"] = $mco_inventario_data[0]["INV_ID"];
           $_REQUEST["mco_inventario__INV_NOMBRE"] = $mco_inventario_data[0]["INV_NOMBRE"];

        }else{
		
           $_REQUEST["mco_inventario__INV_ID"] = WebSession::getProperty("mco_inventario__INV_ID");
           $_REQUEST["mco_inventario__INV_NOMBRE"] = WebSession::getProperty("mco_inventario__INV_NOMBRE");		
        }
		
        WebSession::unsetProperty("mco_inventario__INV_ID");
        WebSession::unsetProperty("mco_inventario__INV_NOMBRE");

        return "success";       
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_comprasdeta__CDE_ID != NULL) && ($mco_comprasdeta__CDE_ID != "")){
           $mco_comprasdeta_manager = Application::getDomainController('Mco_comprasdetaManager'); 
           $mco_comprasdeta_data = $mco_comprasdeta_manager->getByIdMco_comprasdeta($mco_comprasdeta__CDE_ID); 
           
           $_REQUEST["mco_comprasdeta__CDE_ID"] = $mco_comprasdeta_data[0]["CDE_ID"];
           $_REQUEST["mco_comprasdeta__CDE_CANTIDAD"] = $mco_comprasdeta_data[0]["CDE_CANTIDAD"];
           $_REQUEST["mco_comprasdeta__CDE_PRECIOCOMPR"] = $mco_comprasdeta_data[0]["CDE_PRECIOCOMPR"];
           $_REQUEST["mco_comprasdeta__COP_ID"] = $mco_comprasdeta_data[0]["COP_ID"];
           $_REQUEST["mco_comprasdeta__PDU_ID"] = $mco_comprasdeta_data[0]["PDU_ID"];

        }else{
		
           $_REQUEST["mco_comprasdeta__CDE_ID"] = WebSession::getProperty("mco_comprasdeta__CDE_ID");
           $_REQUEST["mco_comprasdeta__CDE_CANTIDAD"] = WebSession::getProperty("mco_comprasdeta__CDE_CANTIDAD");
           $_REQUEST["mco_comprasdeta__CDE_PRECIOCOMPR"] = WebSession::getProperty("mco_comprasdeta__CDE_PRECIOCOMPR");
           $_REQUEST["mco_comprasdeta__COP_ID"] = WebSession::getProperty("mco_comprasdeta__COP_ID");
           $_REQUEST["mco_comprasdeta__PDU_ID"] = WebSession::getProperty("mco_comprasdeta__PDU_ID");		
        }
		
        WebSession::unsetProperty("mco_comprasdeta__CDE_ID");
        WebSession::unsetProperty("mco_comprasdeta__CDE_CANTIDAD");
        WebSession::unsetProperty("mco_comprasdeta__CDE_PRECIOCOMPR");
        WebSession::unsetProperty("mco_comprasdeta__COP_ID");
        WebSession::unsetProperty("mco_comprasdeta__PDU_ID");

        return "success";       
    }

}

?>	

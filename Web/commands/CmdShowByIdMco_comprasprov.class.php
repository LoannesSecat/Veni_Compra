<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_comprasprov {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_comprasprov__COP_ID != NULL) && ($mco_comprasprov__COP_ID != "")){
           $mco_comprasprov_manager = Application::getDomainController('Mco_comprasprovManager'); 
           $mco_comprasprov_data = $mco_comprasprov_manager->getByIdMco_comprasprov($mco_comprasprov__COP_ID); 
           
           $_REQUEST["mco_comprasprov__COP_ID"] = $mco_comprasprov_data[0]["COP_ID"];
           $_REQUEST["mco_comprasprov__COP_FECHACOMPRA"] = $mco_comprasprov_data[0]["COP_FECHACOMPRA"];
           $_REQUEST["mco_comprasprov__COP_TOTALCOMPRA"] = $mco_comprasprov_data[0]["COP_TOTALCOMPRA"];
           $_REQUEST["mco_comprasprov__USU_ID"] = $mco_comprasprov_data[0]["USU_ID"];
           $_REQUEST["mco_comprasprov__PVE_ID"] = $mco_comprasprov_data[0]["PVE_ID"];

        }else{
		
           $_REQUEST["mco_comprasprov__COP_ID"] = WebSession::getProperty("mco_comprasprov__COP_ID");
           $_REQUEST["mco_comprasprov__COP_FECHACOMPRA"] = WebSession::getProperty("mco_comprasprov__COP_FECHACOMPRA");
           $_REQUEST["mco_comprasprov__COP_TOTALCOMPRA"] = WebSession::getProperty("mco_comprasprov__COP_TOTALCOMPRA");
           $_REQUEST["mco_comprasprov__USU_ID"] = WebSession::getProperty("mco_comprasprov__USU_ID");
           $_REQUEST["mco_comprasprov__PVE_ID"] = WebSession::getProperty("mco_comprasprov__PVE_ID");		
        }
		
        WebSession::unsetProperty("mco_comprasprov__COP_ID");
        WebSession::unsetProperty("mco_comprasprov__COP_FECHACOMPRA");
        WebSession::unsetProperty("mco_comprasprov__COP_TOTALCOMPRA");
        WebSession::unsetProperty("mco_comprasprov__USU_ID");
        WebSession::unsetProperty("mco_comprasprov__PVE_ID");

        return "success";       
    }

}

?>	

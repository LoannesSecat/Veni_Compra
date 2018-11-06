<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_comanper {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_comanper__COP_ID != NULL) && ($mus_comanper__COP_ID != "")){
           $mus_comanper_manager = Application::getDomainController('Mus_comanperManager'); 
           $mus_comanper_data = $mus_comanper_manager->getByIdMus_comanper($mus_comanper__COP_ID); 
           
           $_REQUEST["mus_comanper__COP_ID"] = $mus_comanper_data[0]["COP_ID"];
           $_REQUEST["mus_comanper__COP_NOMBRE"] = $mus_comanper_data[0]["COP_NOMBRE"];

        }else{
		
           $_REQUEST["mus_comanper__COP_ID"] = WebSession::getProperty("mus_comanper__COP_ID");
           $_REQUEST["mus_comanper__COP_NOMBRE"] = WebSession::getProperty("mus_comanper__COP_NOMBRE");		
        }
		
        WebSession::unsetProperty("mus_comanper__COP_ID");
        WebSession::unsetProperty("mus_comanper__COP_NOMBRE");

        return "success";       
    }

}

?>	

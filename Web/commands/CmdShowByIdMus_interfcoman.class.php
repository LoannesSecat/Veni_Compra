<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_interfcoman {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_interfcoman__ITC_ID != NULL) && ($mus_interfcoman__ITC_ID != "")){
           $mus_interfcoman_manager = Application::getDomainController('Mus_interfcomanManager'); 
           $mus_interfcoman_data = $mus_interfcoman_manager->getByIdMus_interfcoman($mus_interfcoman__ITC_ID); 
           
           $_REQUEST["mus_interfcoman__ITC_ID"] = $mus_interfcoman_data[0]["ITC_ID"];
           $_REQUEST["mus_interfcoman__MUS_COMANPER_COP_ID"] = $mus_interfcoman_data[0]["MUS_COMANPER_COP_ID"];
           $_REQUEST["mus_interfcoman__MUS_INTERPERM_INP_ID"] = $mus_interfcoman_data[0]["MUS_INTERPERM_INP_ID"];

        }else{
		
           $_REQUEST["mus_interfcoman__ITC_ID"] = WebSession::getProperty("mus_interfcoman__ITC_ID");
           $_REQUEST["mus_interfcoman__MUS_COMANPER_COP_ID"] = WebSession::getProperty("mus_interfcoman__MUS_COMANPER_COP_ID");
           $_REQUEST["mus_interfcoman__MUS_INTERPERM_INP_ID"] = WebSession::getProperty("mus_interfcoman__MUS_INTERPERM_INP_ID");		
        }
		
        WebSession::unsetProperty("mus_interfcoman__ITC_ID");
        WebSession::unsetProperty("mus_interfcoman__MUS_COMANPER_COP_ID");
        WebSession::unsetProperty("mus_interfcoman__MUS_INTERPERM_INP_ID");

        return "success";       
    }

}

?>	

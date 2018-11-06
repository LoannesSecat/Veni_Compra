<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_rolinfcom__RIC_ID != NULL) && ($mus_rolinfcom__RIC_ID != "")){
           $mus_rolinfcom_manager = Application::getDomainController('Mus_rolinfcomManager'); 
           $mus_rolinfcom_data = $mus_rolinfcom_manager->getByIdMus_rolinfcom($mus_rolinfcom__RIC_ID); 
           
           $_REQUEST["mus_rolinfcom__RIC_ID"] = $mus_rolinfcom_data[0]["RIC_ID"];
           $_REQUEST["mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID"] = $mus_rolinfcom_data[0]["MUS_INTERFCOMAN_ITC_ID"];
           $_REQUEST["mus_rolinfcom__MUS_ROLES_ROL_ID"] = $mus_rolinfcom_data[0]["MUS_ROLES_ROL_ID"];

        }else{
		
           $_REQUEST["mus_rolinfcom__RIC_ID"] = WebSession::getProperty("mus_rolinfcom__RIC_ID");
           $_REQUEST["mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID"] = WebSession::getProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID");
           $_REQUEST["mus_rolinfcom__MUS_ROLES_ROL_ID"] = WebSession::getProperty("mus_rolinfcom__MUS_ROLES_ROL_ID");		
        }
		
        WebSession::unsetProperty("mus_rolinfcom__RIC_ID");
        WebSession::unsetProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID");
        WebSession::unsetProperty("mus_rolinfcom__MUS_ROLES_ROL_ID");

        return "success";       
    }

}

?>	

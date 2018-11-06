<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_roles {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_roles__ROL_ID != NULL) && ($mus_roles__ROL_ID != "")){
           $mus_roles_manager = Application::getDomainController('Mus_rolesManager'); 
           $mus_roles_data = $mus_roles_manager->getByIdMus_roles($mus_roles__ROL_ID); 
           
           $_REQUEST["mus_roles__ROL_ID"] = $mus_roles_data[0]["ROL_ID"];
           $_REQUEST["mus_roles__ROL_NOMBRE"] = $mus_roles_data[0]["ROL_NOMBRE"];

        }else{
		
           $_REQUEST["mus_roles__ROL_ID"] = WebSession::getProperty("mus_roles__ROL_ID");
           $_REQUEST["mus_roles__ROL_NOMBRE"] = WebSession::getProperty("mus_roles__ROL_NOMBRE");		
        }
		
        WebSession::unsetProperty("mus_roles__ROL_ID");
        WebSession::unsetProperty("mus_roles__ROL_NOMBRE");

        return "success";       
    }

}

?>	

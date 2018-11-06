<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_interperm {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_interperm__INP_ID != NULL) && ($mus_interperm__INP_ID != "")){
           $mus_interperm_manager = Application::getDomainController('Mus_interpermManager'); 
           $mus_interperm_data = $mus_interperm_manager->getByIdMus_interperm($mus_interperm__INP_ID); 
           
           $_REQUEST["mus_interperm__INP_ID"] = $mus_interperm_data[0]["INP_ID"];
           $_REQUEST["mus_interperm__INP_NOMBRE"] = $mus_interperm_data[0]["INP_NOMBRE"];

        }else{
		
           $_REQUEST["mus_interperm__INP_ID"] = WebSession::getProperty("mus_interperm__INP_ID");
           $_REQUEST["mus_interperm__INP_NOMBRE"] = WebSession::getProperty("mus_interperm__INP_NOMBRE");		
        }
		
        WebSession::unsetProperty("mus_interperm__INP_ID");
        WebSession::unsetProperty("mus_interperm__INP_NOMBRE");

        return "success";       
    }

}

?>	

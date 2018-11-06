<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdDominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($dominios__DOM_ID != NULL) && ($dominios__DOM_ID != "")){
           $dominios_manager = Application::getDomainController('DominiosManager'); 
           $dominios_data = $dominios_manager->getByIdDominios($dominios__DOM_ID); 
           
           $_REQUEST["dominios__DOM_ID"] = $dominios_data[0]["DOM_ID"];
           $_REQUEST["dominios__DOM__NOMBRE"] = $dominios_data[0]["DOM__NOMBRE"];
           $_REQUEST["dominios__DOM_USO"] = $dominios_data[0]["DOM_USO"];

        }else{
		
           $_REQUEST["dominios__DOM_ID"] = WebSession::getProperty("dominios__DOM_ID");
           $_REQUEST["dominios__DOM__NOMBRE"] = WebSession::getProperty("dominios__DOM__NOMBRE");
           $_REQUEST["dominios__DOM_USO"] = WebSession::getProperty("dominios__DOM_USO");		
        }
		
        WebSession::unsetProperty("dominios__DOM_ID");
        WebSession::unsetProperty("dominios__DOM__NOMBRE");
        WebSession::unsetProperty("dominios__DOM_USO");

        return "success";       
    }

}

?>	

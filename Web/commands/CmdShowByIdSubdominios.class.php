<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdSubdominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($subdominios__SUB_ID != NULL) && ($subdominios__SUB_ID != "")){
           $subdominios_manager = Application::getDomainController('SubdominiosManager'); 
           $subdominios_data = $subdominios_manager->getByIdSubdominios($subdominios__SUB_ID); 
           
           $_REQUEST["subdominios__SUB_ID"] = $subdominios_data[0]["SUB_ID"];
           $_REQUEST["subdominios__DOMINIOS_DOM_ID"] = $subdominios_data[0]["DOMINIOS_DOM_ID"];
           $_REQUEST["subdominios__SUB_VALOR"] = $subdominios_data[0]["SUB_VALOR"];
           $_REQUEST["subdominios__SUB_DESCRIPCION"] = $subdominios_data[0]["SUB_DESCRIPCION"];
           $_REQUEST["subdominios__SUB_AUX1"] = $subdominios_data[0]["SUB_AUX1"];
           $_REQUEST["subdominios__SUB_AUX2"] = $subdominios_data[0]["SUB_AUX2"];

        }else{
		
           $_REQUEST["subdominios__SUB_ID"] = WebSession::getProperty("subdominios__SUB_ID");
           $_REQUEST["subdominios__DOMINIOS_DOM_ID"] = WebSession::getProperty("subdominios__DOMINIOS_DOM_ID");
           $_REQUEST["subdominios__SUB_VALOR"] = WebSession::getProperty("subdominios__SUB_VALOR");
           $_REQUEST["subdominios__SUB_DESCRIPCION"] = WebSession::getProperty("subdominios__SUB_DESCRIPCION");
           $_REQUEST["subdominios__SUB_AUX1"] = WebSession::getProperty("subdominios__SUB_AUX1");
           $_REQUEST["subdominios__SUB_AUX2"] = WebSession::getProperty("subdominios__SUB_AUX2");		
        }
		
        WebSession::unsetProperty("subdominios__SUB_ID");
        WebSession::unsetProperty("subdominios__DOMINIOS_DOM_ID");
        WebSession::unsetProperty("subdominios__SUB_VALOR");
        WebSession::unsetProperty("subdominios__SUB_DESCRIPCION");
        WebSession::unsetProperty("subdominios__SUB_AUX1");
        WebSession::unsetProperty("subdominios__SUB_AUX2");

        return "success";       
    }

}

?>	

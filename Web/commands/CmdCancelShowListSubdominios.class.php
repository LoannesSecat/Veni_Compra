<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListSubdominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["subdominios__SUB_ID"] = WebSession::getProperty("subdominios__SUB_ID");
        $_REQUEST["subdominios__DOMINIOS_DOM_ID"] = WebSession::getProperty("subdominios__DOMINIOS_DOM_ID");
        $_REQUEST["subdominios__SUB_VALOR"] = WebSession::getProperty("subdominios__SUB_VALOR");
        $_REQUEST["subdominios__SUB_DESCRIPCION"] = WebSession::getProperty("subdominios__SUB_DESCRIPCION");
        $_REQUEST["subdominios__SUB_AUX1"] = WebSession::getProperty("subdominios__SUB_AUX1");
        $_REQUEST["subdominios__SUB_AUX2"] = WebSession::getProperty("subdominios__SUB_AUX2");
        
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

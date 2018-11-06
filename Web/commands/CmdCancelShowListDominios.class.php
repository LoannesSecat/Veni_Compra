<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListDominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["dominios__DOM_ID"] = WebSession::getProperty("dominios__DOM_ID");
        $_REQUEST["dominios__DOM__NOMBRE"] = WebSession::getProperty("dominios__DOM__NOMBRE");
        $_REQUEST["dominios__DOM_USO"] = WebSession::getProperty("dominios__DOM_USO");
        
        WebSession::unsetProperty("dominios__DOM_ID");
        WebSession::unsetProperty("dominios__DOM__NOMBRE");
        WebSession::unsetProperty("dominios__DOM_USO");
        
        return "success";  
    }

}

?>	

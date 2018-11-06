<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_interperm {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_interperm__INP_ID"] = WebSession::getProperty("mus_interperm__INP_ID");
        $_REQUEST["mus_interperm__INP_NOMBRE"] = WebSession::getProperty("mus_interperm__INP_NOMBRE");
        
        WebSession::unsetProperty("mus_interperm__INP_ID");
        WebSession::unsetProperty("mus_interperm__INP_NOMBRE");
        
        return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_roles {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_roles__ROL_ID"] = WebSession::getProperty("mus_roles__ROL_ID");
        $_REQUEST["mus_roles__ROL_NOMBRE"] = WebSession::getProperty("mus_roles__ROL_NOMBRE");
        
        WebSession::unsetProperty("mus_roles__ROL_ID");
        WebSession::unsetProperty("mus_roles__ROL_NOMBRE");
        
        return "success";  
    }

}

?>	

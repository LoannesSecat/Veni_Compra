<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_rolinfcom__RIC_ID"] = WebSession::getProperty("mus_rolinfcom__RIC_ID");
        $_REQUEST["mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID"] = WebSession::getProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID");
        $_REQUEST["mus_rolinfcom__MUS_ROLES_ROL_ID"] = WebSession::getProperty("mus_rolinfcom__MUS_ROLES_ROL_ID");
        
        WebSession::unsetProperty("mus_rolinfcom__RIC_ID");
        WebSession::unsetProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID");
        WebSession::unsetProperty("mus_rolinfcom__MUS_ROLES_ROL_ID");
        
        return "success";  
    }

}

?>	

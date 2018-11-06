<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_comanper {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_comanper__COP_ID"] = WebSession::getProperty("mus_comanper__COP_ID");
        $_REQUEST["mus_comanper__COP_NOMBRE"] = WebSession::getProperty("mus_comanper__COP_NOMBRE");
        
        WebSession::unsetProperty("mus_comanper__COP_ID");
        WebSession::unsetProperty("mus_comanper__COP_NOMBRE");
        
        return "success";  
    }

}

?>	

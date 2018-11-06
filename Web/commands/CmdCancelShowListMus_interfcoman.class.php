<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_interfcoman {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_interfcoman__ITC_ID"] = WebSession::getProperty("mus_interfcoman__ITC_ID");
        $_REQUEST["mus_interfcoman__MUS_COMANPER_COP_ID"] = WebSession::getProperty("mus_interfcoman__MUS_COMANPER_COP_ID");
        $_REQUEST["mus_interfcoman__MUS_INTERPERM_INP_ID"] = WebSession::getProperty("mus_interfcoman__MUS_INTERPERM_INP_ID");
        
        WebSession::unsetProperty("mus_interfcoman__ITC_ID");
        WebSession::unsetProperty("mus_interfcoman__MUS_COMANPER_COP_ID");
        WebSession::unsetProperty("mus_interfcoman__MUS_INTERPERM_INP_ID");
        
        return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_interfcoman {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_interfcoman__ITC_ID"))
           WebSession::setProperty("mus_interfcoman__ITC_ID",$mus_interfcoman__ITC_ID);

       if(!WebSession::issetProperty("mus_interfcoman__MUS_COMANPER_COP_ID"))
           WebSession::setProperty("mus_interfcoman__MUS_COMANPER_COP_ID",$mus_interfcoman__MUS_COMANPER_COP_ID);

       if(!WebSession::issetProperty("mus_interfcoman__MUS_INTERPERM_INP_ID"))
           WebSession::setProperty("mus_interfcoman__MUS_INTERPERM_INP_ID",$mus_interfcoman__MUS_INTERPERM_INP_ID);

       return "success";  
    }

}

?>	

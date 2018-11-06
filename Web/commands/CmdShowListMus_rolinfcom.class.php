<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_rolinfcom__RIC_ID"))
           WebSession::setProperty("mus_rolinfcom__RIC_ID",$mus_rolinfcom__RIC_ID);

       if(!WebSession::issetProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID"))
           WebSession::setProperty("mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID",$mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID);

       if(!WebSession::issetProperty("mus_rolinfcom__MUS_ROLES_ROL_ID"))
           WebSession::setProperty("mus_rolinfcom__MUS_ROLES_ROL_ID",$mus_rolinfcom__MUS_ROLES_ROL_ID);

       return "success";  
    }

}

?>	

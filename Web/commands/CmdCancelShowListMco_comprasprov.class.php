<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_comprasprov {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_comprasprov__COP_ID"] = WebSession::getProperty("mco_comprasprov__COP_ID");
        $_REQUEST["mco_comprasprov__COP_FECHACOMPRA"] = WebSession::getProperty("mco_comprasprov__COP_FECHACOMPRA");
        $_REQUEST["mco_comprasprov__COP_TOTALCOMPRA"] = WebSession::getProperty("mco_comprasprov__COP_TOTALCOMPRA");
        $_REQUEST["mco_comprasprov__USU_ID"] = WebSession::getProperty("mco_comprasprov__USU_ID");
        $_REQUEST["mco_comprasprov__PVE_ID"] = WebSession::getProperty("mco_comprasprov__PVE_ID");
        
        WebSession::unsetProperty("mco_comprasprov__COP_ID");
        WebSession::unsetProperty("mco_comprasprov__COP_FECHACOMPRA");
        WebSession::unsetProperty("mco_comprasprov__COP_TOTALCOMPRA");
        WebSession::unsetProperty("mco_comprasprov__USU_ID");
        WebSession::unsetProperty("mco_comprasprov__PVE_ID");
        
        return "success";  
    }

}

?>	

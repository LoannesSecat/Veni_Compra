<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_comprasprov {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_comprasprov__COP_ID"))
           WebSession::setProperty("mco_comprasprov__COP_ID",$mco_comprasprov__COP_ID);

       if(!WebSession::issetProperty("mco_comprasprov__COP_FECHACOMPRA"))
           WebSession::setProperty("mco_comprasprov__COP_FECHACOMPRA",$mco_comprasprov__COP_FECHACOMPRA);

       if(!WebSession::issetProperty("mco_comprasprov__COP_TOTALCOMPRA"))
           WebSession::setProperty("mco_comprasprov__COP_TOTALCOMPRA",$mco_comprasprov__COP_TOTALCOMPRA);

       if(!WebSession::issetProperty("mco_comprasprov__USU_ID"))
           WebSession::setProperty("mco_comprasprov__USU_ID",$mco_comprasprov__USU_ID);

       if(!WebSession::issetProperty("mco_comprasprov__PVE_ID"))
           WebSession::setProperty("mco_comprasprov__PVE_ID",$mco_comprasprov__PVE_ID);

       return "success";  
    }

}

?>	

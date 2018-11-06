<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_comanper {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_comanper__COP_ID"))
           WebSession::setProperty("mus_comanper__COP_ID",$mus_comanper__COP_ID);

       if(!WebSession::issetProperty("mus_comanper__COP_NOMBRE"))
           WebSession::setProperty("mus_comanper__COP_NOMBRE",$mus_comanper__COP_NOMBRE);

       return "success";  
    }

}

?>	

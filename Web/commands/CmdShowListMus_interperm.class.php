<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_interperm {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_interperm__INP_ID"))
           WebSession::setProperty("mus_interperm__INP_ID",$mus_interperm__INP_ID);

       if(!WebSession::issetProperty("mus_interperm__INP_NOMBRE"))
           WebSession::setProperty("mus_interperm__INP_NOMBRE",$mus_interperm__INP_NOMBRE);

       return "success";  
    }

}

?>	

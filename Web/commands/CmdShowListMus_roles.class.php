<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_roles {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_roles__ROL_ID"))
           WebSession::setProperty("mus_roles__ROL_ID",$mus_roles__ROL_ID);

       if(!WebSession::issetProperty("mus_roles__ROL_NOMBRE"))
           WebSession::setProperty("mus_roles__ROL_NOMBRE",$mus_roles__ROL_NOMBRE);

       return "success";  
    }

}

?>	

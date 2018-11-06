<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar la interfaz de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDefaultMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        //delete session for forms
        WebSession::unsetPropertyForms();
        return "success";  
    }

}

?>	

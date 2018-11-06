<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar la interfaz de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDefaultMve_facturas {

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

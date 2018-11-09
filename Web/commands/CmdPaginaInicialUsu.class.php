<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "WebRequest.class.php";
/**
 * Comando para mostrar la interfaz de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdPaginaInicialUsu {

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
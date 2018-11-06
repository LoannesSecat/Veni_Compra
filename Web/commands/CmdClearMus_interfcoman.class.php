<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_interfcoman {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_interfcoman_manager = Application::getDomainController("Mus_interfcomanManager"); 
		$mus_interfcoman_manager->UnsetRequest();
		return "success";  
	}

}

?>	

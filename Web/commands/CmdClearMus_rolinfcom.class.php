<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_rolinfcom_manager = Application::getDomainController("Mus_rolinfcomManager"); 
		$mus_rolinfcom_manager->UnsetRequest();
		return "success";  
	}

}

?>	

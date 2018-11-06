<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_comanper {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_comanper_manager = Application::getDomainController("Mus_comanperManager"); 
		$mus_comanper_manager->UnsetRequest();
		return "success";  
	}

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_interperm {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_interperm_manager = Application::getDomainController("Mus_interpermManager"); 
		$mus_interperm_manager->UnsetRequest();
		return "success";  
	}

}

?>	

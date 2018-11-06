<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_comprasprov {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_comprasprov_manager = Application::getDomainController("Mco_comprasprovManager"); 
		$mco_comprasprov_manager->UnsetRequest();
		return "success";  
	}

}

?>	

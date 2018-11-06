<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearDominios {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$dominios_manager = Application::getDomainController("DominiosManager"); 
		$dominios_manager->UnsetRequest();
		return "success";  
	}

}

?>	

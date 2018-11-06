<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMga_garantias {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mga_garantias_manager = Application::getDomainController("Mga_garantiasManager"); 
		$mga_garantias_manager->UnsetRequest();
		return "success";  
	}

}

?>	

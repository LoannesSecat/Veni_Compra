<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_inventario {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_inventario_manager = Application::getDomainController("Mco_inventarioManager"); 
		$mco_inventario_manager->UnsetRequest();
		return "success";  
	}

}

?>	

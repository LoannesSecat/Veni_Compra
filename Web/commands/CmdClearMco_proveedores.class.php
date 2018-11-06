<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_proveedores {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_proveedores_manager = Application::getDomainController("Mco_proveedoresManager"); 
		$mco_proveedores_manager->UnsetRequest();
		return "success";  
	}

}

?>	

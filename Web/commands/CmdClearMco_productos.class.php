<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_productos {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_productos_manager = Application::getDomainController("Mco_productosManager"); 
		$mco_productos_manager->UnsetRequest();
		return "success";  
	}

}

?>	

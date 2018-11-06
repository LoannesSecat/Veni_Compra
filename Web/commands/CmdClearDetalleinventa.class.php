<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearDetalleinventa {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$detalleinventa_manager = Application::getDomainController("DetalleinventaManager"); 
		$detalleinventa_manager->UnsetRequest();
		return "success";  
	}

}

?>	

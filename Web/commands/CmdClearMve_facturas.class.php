<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mve_facturas_manager = Application::getDomainController("Mve_facturasManager"); 
		$mve_facturas_manager->UnsetRequest();
		return "success";  
	}

}

?>	

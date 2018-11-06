<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mve_facturasdet_manager = Application::getDomainController("Mve_facturasdetManager"); 
		$mve_facturasdet_manager->UnsetRequest();
		return "success";  
	}

}

?>	

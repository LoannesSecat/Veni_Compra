<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_comprasdeta_manager = Application::getDomainController("Mco_comprasdetaManager"); 
		$mco_comprasdeta_manager->UnsetRequest();
		return "success";  
	}

}

?>	

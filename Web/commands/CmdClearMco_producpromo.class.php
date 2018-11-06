<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMco_producpromo {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mco_producpromo_manager = Application::getDomainController("Mco_producpromoManager"); 
		$mco_producpromo_manager->UnsetRequest();
		return "success";  
	}

}

?>	

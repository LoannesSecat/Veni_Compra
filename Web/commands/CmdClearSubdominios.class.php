<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdClearSubdominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
		$subdominios_manager = Application::getDomainController("SubdominiosManager"); 
		$subdominios_manager->UnsetRequest();
        return "success";  
    }

}

?>	

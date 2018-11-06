<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_roles {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_roles_manager = Application::getDomainController("Mus_rolesManager"); 
		$mus_roles_manager->UnsetRequest();
		return "success";  
	}

}

?>	

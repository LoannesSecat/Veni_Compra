<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para limpiar los datos de la pantalla de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdClearMus_usuarios {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);
		$mus_usuarios_manager = Application::getDomainController("Mus_usuariosManager"); 
		$mus_usuarios_manager->UnsetRequest();
		return "success";  
	}

}

?>	

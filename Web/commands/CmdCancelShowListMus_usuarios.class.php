<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMus_usuarios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mus_usuarios__USU_ID"] = WebSession::getProperty("mus_usuarios__USU_ID");
        $_REQUEST["mus_usuarios__USU_NOMBRE"] = WebSession::getProperty("mus_usuarios__USU_NOMBRE");
        $_REQUEST["mus_usuarios__USU_APELLIDO"] = WebSession::getProperty("mus_usuarios__USU_APELLIDO");
        $_REQUEST["mus_usuarios__USU_FECHA_NACI"] = WebSession::getProperty("mus_usuarios__USU_FECHA_NACI");
        $_REQUEST["mus_usuarios__USU_DIRECCION"] = WebSession::getProperty("mus_usuarios__USU_DIRECCION");
        $_REQUEST["mus_usuarios__USU_EMAIL"] = WebSession::getProperty("mus_usuarios__USU_EMAIL");
        $_REQUEST["mus_usuarios__USU_CELULAR"] = WebSession::getProperty("mus_usuarios__USU_CELULAR");
        $_REQUEST["mus_usuarios__USU_CONTRASENA"] = WebSession::getProperty("mus_usuarios__USU_CONTRASENA");
        $_REQUEST["mus_usuarios__SUB_SEXO"] = WebSession::getProperty("mus_usuarios__SUB_SEXO");
        $_REQUEST["mus_usuarios__ROL_ID"] = WebSession::getProperty("mus_usuarios__ROL_ID");
        
        WebSession::unsetProperty("mus_usuarios__USU_ID");
        WebSession::unsetProperty("mus_usuarios__USU_NOMBRE");
        WebSession::unsetProperty("mus_usuarios__USU_APELLIDO");
        WebSession::unsetProperty("mus_usuarios__USU_FECHA_NACI");
        WebSession::unsetProperty("mus_usuarios__USU_DIRECCION");
        WebSession::unsetProperty("mus_usuarios__USU_EMAIL");
        WebSession::unsetProperty("mus_usuarios__USU_CELULAR");
        WebSession::unsetProperty("mus_usuarios__USU_CONTRASENA");
        WebSession::unsetProperty("mus_usuarios__SUB_SEXO");
        WebSession::unsetProperty("mus_usuarios__ROL_ID");
        
        return "success";  
    }

}

?>	

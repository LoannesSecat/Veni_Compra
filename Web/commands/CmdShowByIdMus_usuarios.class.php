<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMus_usuarios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mus_usuarios__USU_ID != NULL) && ($mus_usuarios__USU_ID != "")){
           $mus_usuarios_manager = Application::getDomainController('Mus_usuariosManager'); 
           $mus_usuarios_data = $mus_usuarios_manager->getByIdMus_usuarios($mus_usuarios__USU_ID); 
           
           $_REQUEST["mus_usuarios__USU_ID"] = $mus_usuarios_data[0]["USU_ID"];
           $_REQUEST["mus_usuarios__USU_NOMBRE"] = $mus_usuarios_data[0]["USU_NOMBRE"];
           $_REQUEST["mus_usuarios__USU_APELLIDO"] = $mus_usuarios_data[0]["USU_APELLIDO"];
           $_REQUEST["mus_usuarios__USU_FECHA_NACI"] = $mus_usuarios_data[0]["USU_FECHA_NACI"];
           $_REQUEST["mus_usuarios__USU_DIRECCION"] = $mus_usuarios_data[0]["USU_DIRECCION"];
           $_REQUEST["mus_usuarios__USU_EMAIL"] = $mus_usuarios_data[0]["USU_EMAIL"];
           $_REQUEST["mus_usuarios__USU_CELULAR"] = $mus_usuarios_data[0]["USU_CELULAR"];
           $_REQUEST["mus_usuarios__USU_CONTRASENA"] = $mus_usuarios_data[0]["USU_CONTRASENA"];
           $_REQUEST["mus_usuarios__SUB_SEXO"] = $mus_usuarios_data[0]["SUB_SEXO"];
           $_REQUEST["mus_usuarios__ROL_ID"] = $mus_usuarios_data[0]["ROL_ID"];

        }else{
		
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
        }
		
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

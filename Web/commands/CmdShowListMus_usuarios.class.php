<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMus_usuarios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mus_usuarios__USU_ID"))
           WebSession::setProperty("mus_usuarios__USU_ID",$mus_usuarios__USU_ID);

       if(!WebSession::issetProperty("mus_usuarios__USU_NOMBRE"))
           WebSession::setProperty("mus_usuarios__USU_NOMBRE",$mus_usuarios__USU_NOMBRE);

       if(!WebSession::issetProperty("mus_usuarios__USU_APELLIDO"))
           WebSession::setProperty("mus_usuarios__USU_APELLIDO",$mus_usuarios__USU_APELLIDO);

       if(!WebSession::issetProperty("mus_usuarios__USU_FECHA_NACI"))
           WebSession::setProperty("mus_usuarios__USU_FECHA_NACI",$mus_usuarios__USU_FECHA_NACI);

       if(!WebSession::issetProperty("mus_usuarios__USU_DIRECCION"))
           WebSession::setProperty("mus_usuarios__USU_DIRECCION",$mus_usuarios__USU_DIRECCION);

       if(!WebSession::issetProperty("mus_usuarios__USU_EMAIL"))
           WebSession::setProperty("mus_usuarios__USU_EMAIL",$mus_usuarios__USU_EMAIL);

       if(!WebSession::issetProperty("mus_usuarios__USU_CELULAR"))
           WebSession::setProperty("mus_usuarios__USU_CELULAR",$mus_usuarios__USU_CELULAR);

       if(!WebSession::issetProperty("mus_usuarios__USU_CONTRASENA"))
           WebSession::setProperty("mus_usuarios__USU_CONTRASENA",$mus_usuarios__USU_CONTRASENA);

       if(!WebSession::issetProperty("mus_usuarios__SUB_SEXO"))
           WebSession::setProperty("mus_usuarios__SUB_SEXO",$mus_usuarios__SUB_SEXO);

       if(!WebSession::issetProperty("mus_usuarios__ROL_ID"))
           WebSession::setProperty("mus_usuarios__ROL_ID",$mus_usuarios__ROL_ID);

       return "success";  
    }

}

?>	

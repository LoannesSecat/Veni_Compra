<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
require_once("Data_type.class.php");

/**
 * Constantes para el manejo de errores
 */
define("ERROR_CAMPO_OBLIGATORIO", 0);
define("ERROR_ENTRADA_NO_VALIDA", 4);

/**
 * Comando para actualizar un registro de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdUpdateMus_usuarios {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);

		//valida que los campos obligatorios no esten vacios
		if(($mus_usuarios__USU_ID != NULL) && ($mus_usuarios__USU_ID != "") && ($mus_usuarios__USU_NOMBRE != NULL) && ($mus_usuarios__USU_NOMBRE != "") && ($mus_usuarios__USU_APELLIDO != NULL) && ($mus_usuarios__USU_APELLIDO != "") && ($mus_usuarios__USU_FECHA_NACI != NULL) && ($mus_usuarios__USU_FECHA_NACI != "") && ($mus_usuarios__USU_DIRECCION != NULL) && ($mus_usuarios__USU_DIRECCION != "") && ($mus_usuarios__USU_EMAIL != NULL) && ($mus_usuarios__USU_EMAIL != "") && ($mus_usuarios__USU_CELULAR != NULL) && ($mus_usuarios__USU_CELULAR != "") && ($mus_usuarios__USU_CONTRASENA != NULL) && ($mus_usuarios__USU_CONTRASENA != "") && ($mus_usuarios__SUB_SEXO != NULL) && ($mus_usuarios__SUB_SEXO != "") && ($mus_usuarios__ROL_ID != NULL) && ($mus_usuarios__ROL_ID != "")){
			$obj_datatype = new Data_type();
			//Hace la validacion de formato (Caracteres no permitidos) de la llave primaria
			if($obj_datatype->formatPrimaryKey($mus_usuarios__USU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			//Hace la validacion de campos numericos y formateo de campos cadena
			if($obj_datatype->isInteger($mus_usuarios__USU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			if($obj_datatype->isInteger($mus_usuarios__SUB_SEXO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			if($obj_datatype->isInteger($mus_usuarios__ROL_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			$mus_usuarios_manager = Application::getDomainController('Mus_usuariosManager'); 
			$message = $mus_usuarios_manager->updateMus_usuarios($mus_usuarios__USU_ID,$mus_usuarios__USU_NOMBRE,$mus_usuarios__USU_APELLIDO,$mus_usuarios__USU_FECHA_NACI,$mus_usuarios__USU_DIRECCION,$mus_usuarios__USU_EMAIL,$mus_usuarios__USU_CELULAR,$mus_usuarios__USU_CONTRASENA,$mus_usuarios__SUB_SEXO,$mus_usuarios__ROL_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 * @copyright Spyro Solutions
 */

require_once "Web/WebRequest.class.php";
require_once("Data_type.class.php");

/**
 * Constantes para el manejo de errores
 */
define("ERROR_CAMPO_OBLIGATORIO", 100);
define("ERROR_ENTRADA_NO_VALIDA", 104);

/**
 * Comando para adicionar un registro de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mus_rolinfcom__RIC_ID != NULL) && ($mus_rolinfcom__RIC_ID != "") && ($mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID != NULL) && ($mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID != "") && ($mus_rolinfcom__MUS_ROLES_ROL_ID != NULL) && ($mus_rolinfcom__MUS_ROLES_ROL_ID != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mus_rolinfcom__RIC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mus_rolinfcom__RIC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mus_rolinfcom__MUS_ROLES_ROL_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mus_rolinfcom_manager = Application::getDomainController('Mus_rolinfcomManager'); 
			$message = $mus_rolinfcom_manager->addMus_rolinfcom($mus_rolinfcom__RIC_ID,$mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID,$mus_rolinfcom__MUS_ROLES_ROL_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

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
 * Comando para actualizar un registro de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdUpdateMus_interperm {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);

		//valida que los campos obligatorios no esten vacios
		if(($mus_interperm__INP_ID != NULL) && ($mus_interperm__INP_ID != "") && ($mus_interperm__INP_NOMBRE != NULL) && ($mus_interperm__INP_NOMBRE != "")){
			$obj_datatype = new Data_type();
			//Hace la validacion de formato (Caracteres no permitidos) de la llave primaria
			if($obj_datatype->formatPrimaryKey($mus_interperm__INP_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			//Hace la validacion de campos numericos y formateo de campos cadena
			if($obj_datatype->isInteger($mus_interperm__INP_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			$mus_interperm_manager = Application::getDomainController('Mus_interpermManager'); 
			$message = $mus_interperm_manager->updateMus_interperm($mus_interperm__INP_ID,$mus_interperm__INP_NOMBRE); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

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
 * Comando para actualizar un registro de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdUpdateMco_comprasprov {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);

		//valida que los campos obligatorios no esten vacios
		if(($mco_comprasprov__COP_ID != NULL) && ($mco_comprasprov__COP_ID != "") && ($mco_comprasprov__COP_FECHACOMPRA != NULL) && ($mco_comprasprov__COP_FECHACOMPRA != "") && ($mco_comprasprov__COP_TOTALCOMPRA != NULL) && ($mco_comprasprov__COP_TOTALCOMPRA != "") && ($mco_comprasprov__USU_ID != NULL) && ($mco_comprasprov__USU_ID != "") && ($mco_comprasprov__PVE_ID != NULL) && ($mco_comprasprov__PVE_ID != "")){
			$obj_datatype = new Data_type();
			//Hace la validacion de formato (Caracteres no permitidos) de la llave primaria
			if($obj_datatype->formatPrimaryKey($mco_comprasprov__COP_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			//Hace la validacion de campos numericos y formateo de campos cadena
			if($obj_datatype->isInteger($mco_comprasprov__COP_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			if($obj_datatype->isInteger($mco_comprasprov__COP_TOTALCOMPRA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			if($obj_datatype->isInteger($mco_comprasprov__USU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			if($obj_datatype->isInteger($mco_comprasprov__PVE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			$mco_comprasprov_manager = Application::getDomainController('Mco_comprasprovManager'); 
			$message = $mco_comprasprov_manager->updateMco_comprasprov($mco_comprasprov__COP_ID,$mco_comprasprov__COP_FECHACOMPRA,$mco_comprasprov__COP_TOTALCOMPRA,$mco_comprasprov__USU_ID,$mco_comprasprov__PVE_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

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
 * Comando para adicionar un registro de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddSubdominios {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($subdominios__SUB_ID != NULL) && ($subdominios__SUB_ID != "") && ($subdominios__DOMINIOS_DOM_ID != NULL) && ($subdominios__DOMINIOS_DOM_ID != "") && ($subdominios__SUB_VALOR != NULL) && ($subdominios__SUB_VALOR != "") && ($subdominios__SUB_DESCRIPCION != NULL) && ($subdominios__SUB_DESCRIPCION != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($subdominios__SUB_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($subdominios__SUB_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($subdominios__DOMINIOS_DOM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$subdominios__SUB_VALOR = $obj_datatype->formatString($subdominios__SUB_VALOR);
			$subdominios__SUB_DESCRIPCION = $obj_datatype->formatString($subdominios__SUB_DESCRIPCION);
			$subdominios__SUB_AUX1 = $obj_datatype->formatString($subdominios__SUB_AUX1);
			$subdominios__SUB_AUX2 = $obj_datatype->formatString($subdominios__SUB_AUX2);
			$subdominios_manager = Application::getDomainController('SubdominiosManager'); 
			$message = $subdominios_manager->addSubdominios($subdominios__SUB_ID,$subdominios__DOMINIOS_DOM_ID,$subdominios__SUB_VALOR,$subdominios__SUB_DESCRIPCION,$subdominios__SUB_AUX1,$subdominios__SUB_AUX2); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

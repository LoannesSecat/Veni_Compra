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
 * Comando para actualizar un registro de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdUpdateDominios {

	/**
	 * @return boolean 
	 */
	function execute()
	{
		extract($_REQUEST);

		//valida que los campos obligatorios no esten vacios
		if(($dominios__DOM_ID != NULL) && ($dominios__DOM_ID != "") && ($dominios__DOM__NOMBRE != NULL) && ($dominios__DOM__NOMBRE != "") && ($dominios__DOM_USO != NULL) && ($dominios__DOM_USO != "")){
			$obj_datatype = new Data_type();
			//Hace la validacion de formato (Caracteres no permitidos) de la llave primaria
			if($obj_datatype->formatPrimaryKey($dominios__DOM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			//Hace la validacion de campos numericos y formateo de campos cadena
			if($obj_datatype->isInteger($dominios__DOM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
	
			$dominios_manager = Application::getDomainController('DominiosManager'); 
			$message = $dominios_manager->updateDominios($dominios__DOM_ID,$dominios__DOM__NOMBRE,$dominios__DOM_USO); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

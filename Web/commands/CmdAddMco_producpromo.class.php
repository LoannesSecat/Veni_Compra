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
 * Comando para adicionar un registro de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMco_producpromo {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mco_producpromo__PPM_ID != NULL) && ($mco_producpromo__PPM_ID != "") && ($mco_producpromo__PDU_ID != NULL) && ($mco_producpromo__PDU_ID != "") && ($mco_producpromo__PPM_FECHAINI != NULL) && ($mco_producpromo__PPM_FECHAINI != "") && ($mco_producpromo__PPM_FECHAFIN != NULL) && ($mco_producpromo__PPM_FECHAFIN != "") && ($mco_producpromo__PPM_PRECIOPROM != NULL) && ($mco_producpromo__PPM_PRECIOPROM != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mco_producpromo__PPM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mco_producpromo__PPM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_producpromo__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_producpromo__PPM_FECHAINI) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_producpromo__PPM_FECHAFIN) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_producpromo__PPM_PRECIOPROM) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mco_producpromo_manager = Application::getDomainController('Mco_producpromoManager'); 
			$message = $mco_producpromo_manager->addMco_producpromo($mco_producpromo__PPM_ID,$mco_producpromo__PDU_ID,$mco_producpromo__PPM_FECHAINI,$mco_producpromo__PPM_FECHAFIN,$mco_producpromo__PPM_PRECIOPROM); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

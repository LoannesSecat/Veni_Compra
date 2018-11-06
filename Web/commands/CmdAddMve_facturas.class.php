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
 * Comando para adicionar un registro de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mve_facturas__FAC_ID != NULL) && ($mve_facturas__FAC_ID != "") && ($mve_facturas__FAC_FECHACOMPRA != NULL) && ($mve_facturas__FAC_FECHACOMPRA != "") && ($mve_facturas__FAC_TOTAL != NULL) && ($mve_facturas__FAC_TOTAL != "") && ($mve_facturas__SUB_TIPOPAGO != NULL) && ($mve_facturas__SUB_TIPOPAGO != "") && ($mve_facturas__USU_ID != NULL) && ($mve_facturas__USU_ID != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mve_facturas__FAC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mve_facturas__FAC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturas__FAC_TOTAL) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturas__SUB_TIPOPAGO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturas__USU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mve_facturas_manager = Application::getDomainController('Mve_facturasManager'); 
			$message = $mve_facturas_manager->addMve_facturas($mve_facturas__FAC_ID,$mve_facturas__FAC_FECHACOMPRA,$mve_facturas__FAC_TOTAL,$mve_facturas__SUB_TIPOPAGO,$mve_facturas__USU_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

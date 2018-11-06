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
 * Comando para adicionar un registro de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mve_facturasdet__FDE_ID != NULL) && ($mve_facturasdet__FDE_ID != "") && ($mve_facturasdet__FDE_CANTIDAD != NULL) && ($mve_facturasdet__FDE_CANTIDAD != "") && ($mve_facturasdet__FDE_PRECIOUNITA != NULL) && ($mve_facturasdet__FDE_PRECIOUNITA != "") && ($mve_facturasdet__FAC_ID != NULL) && ($mve_facturasdet__FAC_ID != "") && ($mve_facturasdet__PDU_ID != NULL) && ($mve_facturasdet__PDU_ID != "") && ($mve_facturasdet__PPM_ID != NULL) && ($mve_facturasdet__PPM_ID != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mve_facturasdet__FDE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mve_facturasdet__FDE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturasdet__FDE_CANTIDAD) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturasdet__FDE_PRECIOUNITA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturasdet__FAC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturasdet__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mve_facturasdet__PPM_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mve_facturasdet_manager = Application::getDomainController('Mve_facturasdetManager'); 
			$message = $mve_facturasdet_manager->addMve_facturasdet($mve_facturasdet__FDE_ID,$mve_facturasdet__FDE_CANTIDAD,$mve_facturasdet__FDE_PRECIOUNITA,$mve_facturasdet__FAC_ID,$mve_facturasdet__PDU_ID,$mve_facturasdet__PPM_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

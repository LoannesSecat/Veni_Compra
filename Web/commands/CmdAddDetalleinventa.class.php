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
 * Comando para adicionar un registro de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddDetalleinventa {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($detalleinventa__DIN_ID != NULL) && ($detalleinventa__DIN_ID != "") && ($detalleinventa__PDU_ID != NULL) && ($detalleinventa__PDU_ID != "") && ($detalleinventa__INV_ID != NULL) && ($detalleinventa__INV_ID != "") && ($detalleinventa__DIN_LOTE != NULL) && ($detalleinventa__DIN_LOTE != "") && ($detalleinventa__DIN_CANTIDAD != NULL) && ($detalleinventa__DIN_CANTIDAD != "") && ($detalleinventa__DIN_PRECIOVENTA != NULL) && ($detalleinventa__DIN_PRECIOVENTA != "") && ($detalleinventa__DIN_FECHA_CADU != NULL) && ($detalleinventa__DIN_FECHA_CADU != "") && ($detalleinventa__DIN_EXIS_BIEN != NULL) && ($detalleinventa__DIN_EXIS_BIEN != "") && ($detalleinventa__DIN_EXIS_MAL != NULL) && ($detalleinventa__DIN_EXIS_MAL != "") && ($detalleinventa__DIN_DEVOL_COMP != NULL) && ($detalleinventa__DIN_DEVOL_COMP != "") && ($detalleinventa__DIN_DEVOL_VENT != NULL) && ($detalleinventa__DIN_DEVOL_VENT != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($detalleinventa__DIN_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($detalleinventa__DIN_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__INV_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$detalleinventa__DIN_LOTE = $obj_datatype->formatString($detalleinventa__DIN_LOTE);
			if($obj_datatype->isInteger($detalleinventa__DIN_CANTIDAD) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__DIN_PRECIOVENTA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__DIN_EXIS_BIEN) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__DIN_EXIS_MAL) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__DIN_DEVOL_COMP) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($detalleinventa__DIN_DEVOL_VENT) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$detalleinventa_manager = Application::getDomainController('DetalleinventaManager'); 
			$message = $detalleinventa_manager->addDetalleinventa($detalleinventa__DIN_ID,$detalleinventa__PDU_ID,$detalleinventa__INV_ID,$detalleinventa__DIN_LOTE,$detalleinventa__DIN_CANTIDAD,$detalleinventa__DIN_PRECIOVENTA,$detalleinventa__DIN_FECHA_CADU,$detalleinventa__DIN_EXIS_BIEN,$detalleinventa__DIN_EXIS_MAL,$detalleinventa__DIN_DEVOL_COMP,$detalleinventa__DIN_DEVOL_VENT); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

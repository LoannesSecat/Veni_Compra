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
 * Comando para adicionar un registro de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mco_comprasdeta__CDE_ID != NULL) && ($mco_comprasdeta__CDE_ID != "") && ($mco_comprasdeta__CDE_CANTIDAD != NULL) && ($mco_comprasdeta__CDE_CANTIDAD != "") && ($mco_comprasdeta__CDE_PRECIOCOMPR != NULL) && ($mco_comprasdeta__CDE_PRECIOCOMPR != "") && ($mco_comprasdeta__COP_ID != NULL) && ($mco_comprasdeta__COP_ID != "") && ($mco_comprasdeta__PDU_ID != NULL) && ($mco_comprasdeta__PDU_ID != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mco_comprasdeta__CDE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mco_comprasdeta__CDE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_comprasdeta__CDE_CANTIDAD) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_comprasdeta__CDE_PRECIOCOMPR) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_comprasdeta__COP_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_comprasdeta__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mco_comprasdeta_manager = Application::getDomainController('Mco_comprasdetaManager'); 
			$message = $mco_comprasdeta_manager->addMco_comprasdeta($mco_comprasdeta__CDE_ID,$mco_comprasdeta__CDE_CANTIDAD,$mco_comprasdeta__CDE_PRECIOCOMPR,$mco_comprasdeta__COP_ID,$mco_comprasdeta__PDU_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

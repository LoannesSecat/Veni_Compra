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
 * Comando para adicionar un registro de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMco_productos {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mco_productos__PDU_ID != NULL) && ($mco_productos__PDU_ID != "") && ($mco_productos__PDU_NOMBRE != NULL) && ($mco_productos__PDU_NOMBRE != "") && ($mco_productos__PDU_DESCRIPCION != NULL) && ($mco_productos__PDU_DESCRIPCION != "") && ($mco_productos__PDU_IMAGENPRODU != NULL) && ($mco_productos__PDU_IMAGENPRODU != "") && ($mco_productos__PDU_STOCKMINIMO != NULL) && ($mco_productos__PDU_STOCKMINIMO != "") && ($mco_productos__SUB_NOMBRECAT != NULL) && ($mco_productos__SUB_NOMBRECAT != "") && ($mco_productos__SUB_ESTADO != NULL) && ($mco_productos__SUB_ESTADO != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mco_productos__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mco_productos__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mco_productos__PDU_NOMBRE = $obj_datatype->formatString($mco_productos__PDU_NOMBRE);
			$mco_productos__PDU_DESCRIPCION = $obj_datatype->formatString($mco_productos__PDU_DESCRIPCION);
			$mco_productos__PDU_IMAGENPRODU = $obj_datatype->formatString($mco_productos__PDU_IMAGENPRODU);
			if($obj_datatype->isInteger($mco_productos__PDU_STOCKMINIMO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_productos__SUB_NOMBRECAT) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($mco_productos__SUB_UNIMEDIDA == ""){
				$mco_productos__SUB_UNIMEDIDA = "NULL";
			}
			
			if($obj_datatype->isInteger($mco_productos__SUB_UNIMEDIDA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($mco_productos__SUB_TALLA == ""){
				$mco_productos__SUB_TALLA = "NULL";
			}
			
			if($obj_datatype->isInteger($mco_productos__SUB_TALLA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($mco_productos__SUB_GENERO == ""){
				$mco_productos__SUB_GENERO = "NULL";
			}
			
			if($obj_datatype->isInteger($mco_productos__SUB_GENERO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mco_productos__SUB_ESTADO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mco_productos_manager = Application::getDomainController('Mco_productosManager'); 
			$message = $mco_productos_manager->addMco_productos($mco_productos__PDU_ID,$mco_productos__PDU_NOMBRE,$mco_productos__PDU_DESCRIPCION,$mco_productos__PDU_IMAGENPRODU,$mco_productos__PDU_STOCKMINIMO,$mco_productos__SUB_NOMBRECAT,$mco_productos__SUB_UNIMEDIDA,$mco_productos__SUB_TALLA,$mco_productos__SUB_GENERO,$mco_productos__SUB_ESTADO); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

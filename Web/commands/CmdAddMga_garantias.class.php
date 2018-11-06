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
 * Comando para adicionar un registro de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMga_garantias {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mga_garantias__GAR_ID != NULL) && ($mga_garantias__GAR_ID != "") && ($mga_garantias__GAR_DESCRIPDEVO != NULL) && ($mga_garantias__GAR_DESCRIPDEVO != "") && ($mga_garantias__GAR_CANTIDAD != NULL) && ($mga_garantias__GAR_CANTIDAD != "") && ($mga_garantias__GAR_FOTOESTADO != NULL) && ($mga_garantias__GAR_FOTOESTADO != "") && ($mga_garantias__GAR_FECHASOLICI != NULL) && ($mga_garantias__GAR_FECHASOLICI != "") && ($mga_garantias__SUB_ESTADO != NULL) && ($mga_garantias__SUB_ESTADO != "") && ($mga_garantias__PDU_ID != NULL) && ($mga_garantias__PDU_ID != "") && ($mga_garantias__FAC_ID != NULL) && ($mga_garantias__FAC_ID != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mga_garantias__GAR_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mga_garantias__GAR_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mga_garantias__GAR_DESCRIPDEVO = $obj_datatype->formatString($mga_garantias__GAR_DESCRIPDEVO);
			if($obj_datatype->isInteger($mga_garantias__GAR_CANTIDAD) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mga_garantias__SUB_ESTADO) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($mga_garantias__SUB_RESPUESTA == ""){
				$mga_garantias__SUB_RESPUESTA = "NULL";
			}
			
			if($obj_datatype->isInteger($mga_garantias__SUB_RESPUESTA) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mga_garantias__PDU_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			if($obj_datatype->isInteger($mga_garantias__FAC_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mga_garantias_manager = Application::getDomainController('Mga_garantiasManager'); 
			$message = $mga_garantias_manager->addMga_garantias($mga_garantias__GAR_ID,$mga_garantias__GAR_DESCRIPDEVO,$mga_garantias__GAR_CANTIDAD,$mga_garantias__GAR_FOTOESTADO,$mga_garantias__GAR_FECHASOLICI,$mga_garantias__SUB_ESTADO,$mga_garantias__SUB_RESPUESTA,$mga_garantias__PDU_ID,$mga_garantias__FAC_ID); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

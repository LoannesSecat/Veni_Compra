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
 * Comando para adicionar un registro de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdAddMco_proveedores {

	/**
	 * @return boolean 
	 */
	function execute(){
		
		extract($_REQUEST);
		
		//valida que los campos obligatorios no esten vacios
		if(($mco_proveedores__PVE_ID != NULL) && ($mco_proveedores__PVE_ID != "") && ($mco_proveedores__PVE_NOMBRE != NULL) && ($mco_proveedores__PVE_NOMBRE != "") && ($mco_proveedores__PVE_DIRECCION != NULL) && ($mco_proveedores__PVE_DIRECCION != "") && ($mco_proveedores__PVE_TELEFONO != NULL) && ($mco_proveedores__PVE_TELEFONO != "") && ($mco_proveedores__PVE_CELULAR != NULL) && ($mco_proveedores__PVE_CELULAR != "") && ($mco_proveedores__PVE_EMAIL != NULL) && ($mco_proveedores__PVE_EMAIL != "")){
			
			$obj_datatype = new Data_type();
			
			/*Hace la validacion de formato (Caracteres no permitidos) de la llave primaria*/
			if($obj_datatype->formatPrimaryKey($mco_proveedores__PVE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}

			/*Hace la validacion de campos numericos y formateo de campos cadena*/
			if($obj_datatype->isInteger($mco_proveedores__PVE_ID) == false){
				WebRequest::setProperty('cod_message',$message = ERROR_ENTRADA_NO_VALIDA);
				return "fail";
			}
			
			$mco_proveedores__PVE_NOMBRE = $obj_datatype->formatString($mco_proveedores__PVE_NOMBRE);
			$mco_proveedores__PVE_DIRECCION = $obj_datatype->formatString($mco_proveedores__PVE_DIRECCION);
			$mco_proveedores__PVE_TELEFONO = $obj_datatype->formatString($mco_proveedores__PVE_TELEFONO);
			$mco_proveedores__PVE_CELULAR = $obj_datatype->formatString($mco_proveedores__PVE_CELULAR);
			$mco_proveedores__PVE_EMAIL = $obj_datatype->formatString($mco_proveedores__PVE_EMAIL);
			$mco_proveedores_manager = Application::getDomainController('Mco_proveedoresManager'); 
			$message = $mco_proveedores_manager->addMco_proveedores($mco_proveedores__PVE_ID,$mco_proveedores__PVE_NOMBRE,$mco_proveedores__PVE_DIRECCION,$mco_proveedores__PVE_TELEFONO,$mco_proveedores__PVE_CELULAR,$mco_proveedores__PVE_EMAIL); 
			WebRequest::setProperty('cod_message', $message);
			return "success";       
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO);
			return "fail";
		}
	}
}

?>	

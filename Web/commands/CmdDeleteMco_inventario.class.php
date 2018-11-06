<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";

/**
 * Constante para el manejo de errores
 */
define("ERROR_CAMPO_OBLIGATORIO", 0);

/**
 * Comando para eliminar un registro de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMco_inventario {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mco_inventario__INV_ID != NULL) && ($mco_inventario__INV_ID != "")){
			$mco_inventario_manager = Application::getDomainController('Mco_inventarioManager'); 
			$message = $mco_inventario_manager->deleteMco_inventario($mco_inventario__INV_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

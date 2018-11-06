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
 * Comando para eliminar un registro de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mve_facturas__FAC_ID != NULL) && ($mve_facturas__FAC_ID != "")){
			$mve_facturas_manager = Application::getDomainController('Mve_facturasManager'); 
			$message = $mve_facturas_manager->deleteMve_facturas($mve_facturas__FAC_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

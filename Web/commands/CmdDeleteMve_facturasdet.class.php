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
 * Comando para eliminar un registro de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mve_facturasdet__FDE_ID != NULL) && ($mve_facturasdet__FDE_ID != "")){
			$mve_facturasdet_manager = Application::getDomainController('Mve_facturasdetManager'); 
			$message = $mve_facturasdet_manager->deleteMve_facturasdet($mve_facturasdet__FDE_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

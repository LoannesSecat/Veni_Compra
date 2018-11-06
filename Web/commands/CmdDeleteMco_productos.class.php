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
 * Comando para eliminar un registro de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMco_productos {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mco_productos__PDU_ID != NULL) && ($mco_productos__PDU_ID != "")){
			$mco_productos_manager = Application::getDomainController('Mco_productosManager'); 
			$message = $mco_productos_manager->deleteMco_productos($mco_productos__PDU_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

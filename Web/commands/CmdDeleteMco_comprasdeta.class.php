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
 * Comando para eliminar un registro de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mco_comprasdeta__CDE_ID != NULL) && ($mco_comprasdeta__CDE_ID != "")){
			$mco_comprasdeta_manager = Application::getDomainController('Mco_comprasdetaManager'); 
			$message = $mco_comprasdeta_manager->deleteMco_comprasdeta($mco_comprasdeta__CDE_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

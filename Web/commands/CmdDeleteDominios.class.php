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
 * Comando para eliminar un registro de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteDominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($dominios__DOM_ID != NULL) && ($dominios__DOM_ID != "")){
			$dominios_manager = Application::getDomainController('DominiosManager'); 
			$message = $dominios_manager->deleteDominios($dominios__DOM_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

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
 * Comando para eliminar un registro de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteSubdominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($subdominios__SUB_ID != NULL) && ($subdominios__SUB_ID != "")){
			$subdominios_manager = Application::getDomainController('SubdominiosManager'); 
			$message = $subdominios_manager->deleteSubdominios($subdominios__SUB_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

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
 * Comando para eliminar un registro de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMus_rolinfcom {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mus_rolinfcom__RIC_ID != NULL) && ($mus_rolinfcom__RIC_ID != "")){
			$mus_rolinfcom_manager = Application::getDomainController('Mus_rolinfcomManager'); 
			$message = $mus_rolinfcom_manager->deleteMus_rolinfcom($mus_rolinfcom__RIC_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

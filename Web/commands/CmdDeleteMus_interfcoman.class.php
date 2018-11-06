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
 * Comando para eliminar un registro de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdDeleteMus_interfcoman {

	/**
	 * @return boolean 
	 */
	function execute()
    {
		extract($_REQUEST);
        
		if(($mus_interfcoman__ITC_ID != NULL) && ($mus_interfcoman__ITC_ID != "")){
			$mus_interfcoman_manager = Application::getDomainController('Mus_interfcomanManager'); 
			$message = $mus_interfcoman_manager->deleteMus_interfcoman($mus_interfcoman__ITC_ID);  
			WebRequest::setProperty('cod_message', $message);
			return "success";         
		}else{
			WebRequest::setProperty('cod_message',$message = ERROR_CAMPO_OBLIGATORIO); 
			return "fail";
		}
	}

}

?>	

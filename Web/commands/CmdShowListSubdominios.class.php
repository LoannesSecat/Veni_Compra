<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListSubdominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("subdominios__SUB_ID"))
           WebSession::setProperty("subdominios__SUB_ID",$subdominios__SUB_ID);

       if(!WebSession::issetProperty("subdominios__DOMINIOS_DOM_ID"))
           WebSession::setProperty("subdominios__DOMINIOS_DOM_ID",$subdominios__DOMINIOS_DOM_ID);

       if(!WebSession::issetProperty("subdominios__SUB_VALOR"))
           WebSession::setProperty("subdominios__SUB_VALOR",$subdominios__SUB_VALOR);

       if(!WebSession::issetProperty("subdominios__SUB_DESCRIPCION"))
           WebSession::setProperty("subdominios__SUB_DESCRIPCION",$subdominios__SUB_DESCRIPCION);

       if(!WebSession::issetProperty("subdominios__SUB_AUX1"))
           WebSession::setProperty("subdominios__SUB_AUX1",$subdominios__SUB_AUX1);

       if(!WebSession::issetProperty("subdominios__SUB_AUX2"))
           WebSession::setProperty("subdominios__SUB_AUX2",$subdominios__SUB_AUX2);

       return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListDominios {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("dominios__DOM_ID"))
           WebSession::setProperty("dominios__DOM_ID",$dominios__DOM_ID);

       if(!WebSession::issetProperty("dominios__DOM__NOMBRE"))
           WebSession::setProperty("dominios__DOM__NOMBRE",$dominios__DOM__NOMBRE);

       if(!WebSession::issetProperty("dominios__DOM_USO"))
           WebSession::setProperty("dominios__DOM_USO",$dominios__DOM_USO);

       return "success";  
    }

}

?>	

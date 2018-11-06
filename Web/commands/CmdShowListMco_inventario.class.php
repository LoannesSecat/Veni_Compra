<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_inventario {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_inventario__INV_ID"))
           WebSession::setProperty("mco_inventario__INV_ID",$mco_inventario__INV_ID);

       if(!WebSession::issetProperty("mco_inventario__INV_NOMBRE"))
           WebSession::setProperty("mco_inventario__INV_NOMBRE",$mco_inventario__INV_NOMBRE);

       return "success";  
    }

}

?>	

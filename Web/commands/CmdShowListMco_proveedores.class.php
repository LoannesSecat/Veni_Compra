<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_proveedores {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_proveedores__PVE_ID"))
           WebSession::setProperty("mco_proveedores__PVE_ID",$mco_proveedores__PVE_ID);

       if(!WebSession::issetProperty("mco_proveedores__PVE_NOMBRE"))
           WebSession::setProperty("mco_proveedores__PVE_NOMBRE",$mco_proveedores__PVE_NOMBRE);

       if(!WebSession::issetProperty("mco_proveedores__PVE_DIRECCION"))
           WebSession::setProperty("mco_proveedores__PVE_DIRECCION",$mco_proveedores__PVE_DIRECCION);

       if(!WebSession::issetProperty("mco_proveedores__PVE_TELEFONO"))
           WebSession::setProperty("mco_proveedores__PVE_TELEFONO",$mco_proveedores__PVE_TELEFONO);

       if(!WebSession::issetProperty("mco_proveedores__PVE_CELULAR"))
           WebSession::setProperty("mco_proveedores__PVE_CELULAR",$mco_proveedores__PVE_CELULAR);

       if(!WebSession::issetProperty("mco_proveedores__PVE_EMAIL"))
           WebSession::setProperty("mco_proveedores__PVE_EMAIL",$mco_proveedores__PVE_EMAIL);

       return "success";  
    }

}

?>	

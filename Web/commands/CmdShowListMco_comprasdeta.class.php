<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_comprasdeta__CDE_ID"))
           WebSession::setProperty("mco_comprasdeta__CDE_ID",$mco_comprasdeta__CDE_ID);

       if(!WebSession::issetProperty("mco_comprasdeta__CDE_CANTIDAD"))
           WebSession::setProperty("mco_comprasdeta__CDE_CANTIDAD",$mco_comprasdeta__CDE_CANTIDAD);

       if(!WebSession::issetProperty("mco_comprasdeta__CDE_PRECIOCOMPR"))
           WebSession::setProperty("mco_comprasdeta__CDE_PRECIOCOMPR",$mco_comprasdeta__CDE_PRECIOCOMPR);

       if(!WebSession::issetProperty("mco_comprasdeta__COP_ID"))
           WebSession::setProperty("mco_comprasdeta__COP_ID",$mco_comprasdeta__COP_ID);

       if(!WebSession::issetProperty("mco_comprasdeta__PDU_ID"))
           WebSession::setProperty("mco_comprasdeta__PDU_ID",$mco_comprasdeta__PDU_ID);

       return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_comprasdeta {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_comprasdeta__CDE_ID"] = WebSession::getProperty("mco_comprasdeta__CDE_ID");
        $_REQUEST["mco_comprasdeta__CDE_CANTIDAD"] = WebSession::getProperty("mco_comprasdeta__CDE_CANTIDAD");
        $_REQUEST["mco_comprasdeta__CDE_PRECIOCOMPR"] = WebSession::getProperty("mco_comprasdeta__CDE_PRECIOCOMPR");
        $_REQUEST["mco_comprasdeta__COP_ID"] = WebSession::getProperty("mco_comprasdeta__COP_ID");
        $_REQUEST["mco_comprasdeta__PDU_ID"] = WebSession::getProperty("mco_comprasdeta__PDU_ID");
        
        WebSession::unsetProperty("mco_comprasdeta__CDE_ID");
        WebSession::unsetProperty("mco_comprasdeta__CDE_CANTIDAD");
        WebSession::unsetProperty("mco_comprasdeta__CDE_PRECIOCOMPR");
        WebSession::unsetProperty("mco_comprasdeta__COP_ID");
        WebSession::unsetProperty("mco_comprasdeta__PDU_ID");
        
        return "success";  
    }

}

?>	

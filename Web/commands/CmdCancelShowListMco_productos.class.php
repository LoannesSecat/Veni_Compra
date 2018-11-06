<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_productos {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_productos__PDU_ID"] = WebSession::getProperty("mco_productos__PDU_ID");
        $_REQUEST["mco_productos__PDU_NOMBRE"] = WebSession::getProperty("mco_productos__PDU_NOMBRE");
        $_REQUEST["mco_productos__PDU_DESCRIPCION"] = WebSession::getProperty("mco_productos__PDU_DESCRIPCION");
        $_REQUEST["mco_productos__PDU_IMAGENPRODU"] = WebSession::getProperty("mco_productos__PDU_IMAGENPRODU");
        $_REQUEST["mco_productos__PDU_STOCKMINIMO"] = WebSession::getProperty("mco_productos__PDU_STOCKMINIMO");
        $_REQUEST["mco_productos__SUB_NOMBRECAT"] = WebSession::getProperty("mco_productos__SUB_NOMBRECAT");
        $_REQUEST["mco_productos__SUB_UNIMEDIDA"] = WebSession::getProperty("mco_productos__SUB_UNIMEDIDA");
        $_REQUEST["mco_productos__SUB_TALLA"] = WebSession::getProperty("mco_productos__SUB_TALLA");
        $_REQUEST["mco_productos__SUB_GENERO"] = WebSession::getProperty("mco_productos__SUB_GENERO");
        $_REQUEST["mco_productos__SUB_ESTADO"] = WebSession::getProperty("mco_productos__SUB_ESTADO");
        
        WebSession::unsetProperty("mco_productos__PDU_ID");
        WebSession::unsetProperty("mco_productos__PDU_NOMBRE");
        WebSession::unsetProperty("mco_productos__PDU_DESCRIPCION");
        WebSession::unsetProperty("mco_productos__PDU_IMAGENPRODU");
        WebSession::unsetProperty("mco_productos__PDU_STOCKMINIMO");
        WebSession::unsetProperty("mco_productos__SUB_NOMBRECAT");
        WebSession::unsetProperty("mco_productos__SUB_UNIMEDIDA");
        WebSession::unsetProperty("mco_productos__SUB_TALLA");
        WebSession::unsetProperty("mco_productos__SUB_GENERO");
        WebSession::unsetProperty("mco_productos__SUB_ESTADO");
        
        return "success";  
    }

}

?>	

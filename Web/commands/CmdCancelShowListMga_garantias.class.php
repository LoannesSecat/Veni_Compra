<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMga_garantias {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mga_garantias__GAR_ID"] = WebSession::getProperty("mga_garantias__GAR_ID");
        $_REQUEST["mga_garantias__GAR_DESCRIPDEVO"] = WebSession::getProperty("mga_garantias__GAR_DESCRIPDEVO");
        $_REQUEST["mga_garantias__GAR_CANTIDAD"] = WebSession::getProperty("mga_garantias__GAR_CANTIDAD");
        $_REQUEST["mga_garantias__GAR_FOTOESTADO"] = WebSession::getProperty("mga_garantias__GAR_FOTOESTADO");
        $_REQUEST["mga_garantias__GAR_FECHASOLICI"] = WebSession::getProperty("mga_garantias__GAR_FECHASOLICI");
        $_REQUEST["mga_garantias__SUB_ESTADO"] = WebSession::getProperty("mga_garantias__SUB_ESTADO");
        $_REQUEST["mga_garantias__SUB_RESPUESTA"] = WebSession::getProperty("mga_garantias__SUB_RESPUESTA");
        $_REQUEST["mga_garantias__PDU_ID"] = WebSession::getProperty("mga_garantias__PDU_ID");
        $_REQUEST["mga_garantias__FAC_ID"] = WebSession::getProperty("mga_garantias__FAC_ID");
        
        WebSession::unsetProperty("mga_garantias__GAR_ID");
        WebSession::unsetProperty("mga_garantias__GAR_DESCRIPDEVO");
        WebSession::unsetProperty("mga_garantias__GAR_CANTIDAD");
        WebSession::unsetProperty("mga_garantias__GAR_FOTOESTADO");
        WebSession::unsetProperty("mga_garantias__GAR_FECHASOLICI");
        WebSession::unsetProperty("mga_garantias__SUB_ESTADO");
        WebSession::unsetProperty("mga_garantias__SUB_RESPUESTA");
        WebSession::unsetProperty("mga_garantias__PDU_ID");
        WebSession::unsetProperty("mga_garantias__FAC_ID");
        
        return "success";  
    }

}

?>	

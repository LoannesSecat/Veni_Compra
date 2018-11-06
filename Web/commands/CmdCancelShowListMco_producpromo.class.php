<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para cancelar la lista de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class CmdCancelShowListMco_producpromo {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        
        $_REQUEST["mco_producpromo__PPM_ID"] = WebSession::getProperty("mco_producpromo__PPM_ID");
        $_REQUEST["mco_producpromo__PDU_ID"] = WebSession::getProperty("mco_producpromo__PDU_ID");
        $_REQUEST["mco_producpromo__PPM_FECHAINI"] = WebSession::getProperty("mco_producpromo__PPM_FECHAINI");
        $_REQUEST["mco_producpromo__PPM_FECHAFIN"] = WebSession::getProperty("mco_producpromo__PPM_FECHAFIN");
        $_REQUEST["mco_producpromo__PPM_PRECIOPROM"] = WebSession::getProperty("mco_producpromo__PPM_PRECIOPROM");
        
        WebSession::unsetProperty("mco_producpromo__PPM_ID");
        WebSession::unsetProperty("mco_producpromo__PDU_ID");
        WebSession::unsetProperty("mco_producpromo__PPM_FECHAINI");
        WebSession::unsetProperty("mco_producpromo__PPM_FECHAFIN");
        WebSession::unsetProperty("mco_producpromo__PPM_PRECIOPROM");
        
        return "success";  
    }

}

?>	

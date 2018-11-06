<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_producpromo {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_producpromo__PPM_ID"))
           WebSession::setProperty("mco_producpromo__PPM_ID",$mco_producpromo__PPM_ID);

       if(!WebSession::issetProperty("mco_producpromo__PDU_ID"))
           WebSession::setProperty("mco_producpromo__PDU_ID",$mco_producpromo__PDU_ID);

       if(!WebSession::issetProperty("mco_producpromo__PPM_FECHAINI"))
           WebSession::setProperty("mco_producpromo__PPM_FECHAINI",$mco_producpromo__PPM_FECHAINI);

       if(!WebSession::issetProperty("mco_producpromo__PPM_FECHAFIN"))
           WebSession::setProperty("mco_producpromo__PPM_FECHAFIN",$mco_producpromo__PPM_FECHAFIN);

       if(!WebSession::issetProperty("mco_producpromo__PPM_PRECIOPROM"))
           WebSession::setProperty("mco_producpromo__PPM_PRECIOPROM",$mco_producpromo__PPM_PRECIOPROM);

       return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_producpromo {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_producpromo__PPM_ID != NULL) && ($mco_producpromo__PPM_ID != "")){
           $mco_producpromo_manager = Application::getDomainController('Mco_producpromoManager'); 
           $mco_producpromo_data = $mco_producpromo_manager->getByIdMco_producpromo($mco_producpromo__PPM_ID); 
           
           $_REQUEST["mco_producpromo__PPM_ID"] = $mco_producpromo_data[0]["PPM_ID"];
           $_REQUEST["mco_producpromo__PDU_ID"] = $mco_producpromo_data[0]["PDU_ID"];
           $_REQUEST["mco_producpromo__PPM_FECHAINI"] = $mco_producpromo_data[0]["PPM_FECHAINI"];
           $_REQUEST["mco_producpromo__PPM_FECHAFIN"] = $mco_producpromo_data[0]["PPM_FECHAFIN"];
           $_REQUEST["mco_producpromo__PPM_PRECIOPROM"] = $mco_producpromo_data[0]["PPM_PRECIOPROM"];

        }else{
		
           $_REQUEST["mco_producpromo__PPM_ID"] = WebSession::getProperty("mco_producpromo__PPM_ID");
           $_REQUEST["mco_producpromo__PDU_ID"] = WebSession::getProperty("mco_producpromo__PDU_ID");
           $_REQUEST["mco_producpromo__PPM_FECHAINI"] = WebSession::getProperty("mco_producpromo__PPM_FECHAINI");
           $_REQUEST["mco_producpromo__PPM_FECHAFIN"] = WebSession::getProperty("mco_producpromo__PPM_FECHAFIN");
           $_REQUEST["mco_producpromo__PPM_PRECIOPROM"] = WebSession::getProperty("mco_producpromo__PPM_PRECIOPROM");		
        }
		
        WebSession::unsetProperty("mco_producpromo__PPM_ID");
        WebSession::unsetProperty("mco_producpromo__PDU_ID");
        WebSession::unsetProperty("mco_producpromo__PPM_FECHAINI");
        WebSession::unsetProperty("mco_producpromo__PPM_FECHAFIN");
        WebSession::unsetProperty("mco_producpromo__PPM_PRECIOPROM");

        return "success";       
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMga_garantias {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mga_garantias__GAR_ID != NULL) && ($mga_garantias__GAR_ID != "")){
           $mga_garantias_manager = Application::getDomainController('Mga_garantiasManager'); 
           $mga_garantias_data = $mga_garantias_manager->getByIdMga_garantias($mga_garantias__GAR_ID); 
           
           $_REQUEST["mga_garantias__GAR_ID"] = $mga_garantias_data[0]["GAR_ID"];
           $_REQUEST["mga_garantias__GAR_DESCRIPDEVO"] = $mga_garantias_data[0]["GAR_DESCRIPDEVO"];
           $_REQUEST["mga_garantias__GAR_CANTIDAD"] = $mga_garantias_data[0]["GAR_CANTIDAD"];
           $_REQUEST["mga_garantias__GAR_FOTOESTADO"] = $mga_garantias_data[0]["GAR_FOTOESTADO"];
           $_REQUEST["mga_garantias__GAR_FECHASOLICI"] = $mga_garantias_data[0]["GAR_FECHASOLICI"];
           $_REQUEST["mga_garantias__SUB_ESTADO"] = $mga_garantias_data[0]["SUB_ESTADO"];
           $_REQUEST["mga_garantias__SUB_RESPUESTA"] = $mga_garantias_data[0]["SUB_RESPUESTA"];
           $_REQUEST["mga_garantias__PDU_ID"] = $mga_garantias_data[0]["PDU_ID"];
           $_REQUEST["mga_garantias__FAC_ID"] = $mga_garantias_data[0]["FAC_ID"];

        }else{
		
           $_REQUEST["mga_garantias__GAR_ID"] = WebSession::getProperty("mga_garantias__GAR_ID");
           $_REQUEST["mga_garantias__GAR_DESCRIPDEVO"] = WebSession::getProperty("mga_garantias__GAR_DESCRIPDEVO");
           $_REQUEST["mga_garantias__GAR_CANTIDAD"] = WebSession::getProperty("mga_garantias__GAR_CANTIDAD");
           $_REQUEST["mga_garantias__GAR_FOTOESTADO"] = WebSession::getProperty("mga_garantias__GAR_FOTOESTADO");
           $_REQUEST["mga_garantias__GAR_FECHASOLICI"] = WebSession::getProperty("mga_garantias__GAR_FECHASOLICI");
           $_REQUEST["mga_garantias__SUB_ESTADO"] = WebSession::getProperty("mga_garantias__SUB_ESTADO");
           $_REQUEST["mga_garantias__SUB_RESPUESTA"] = WebSession::getProperty("mga_garantias__SUB_RESPUESTA");
           $_REQUEST["mga_garantias__PDU_ID"] = WebSession::getProperty("mga_garantias__PDU_ID");
           $_REQUEST["mga_garantias__FAC_ID"] = WebSession::getProperty("mga_garantias__FAC_ID");		
        }
		
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

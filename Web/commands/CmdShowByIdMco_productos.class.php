<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para consultar un registro de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowByIdMco_productos {

	/**
	 * @return boolean 
	 */
	function execute()
    {
        extract($_REQUEST);

        if(($mco_productos__PDU_ID != NULL) && ($mco_productos__PDU_ID != "")){
           $mco_productos_manager = Application::getDomainController('Mco_productosManager'); 
           $mco_productos_data = $mco_productos_manager->getByIdMco_productos($mco_productos__PDU_ID); 
           
           $_REQUEST["mco_productos__PDU_ID"] = $mco_productos_data[0]["PDU_ID"];
           $_REQUEST["mco_productos__PDU_NOMBRE"] = $mco_productos_data[0]["PDU_NOMBRE"];
           $_REQUEST["mco_productos__PDU_DESCRIPCION"] = $mco_productos_data[0]["PDU_DESCRIPCION"];
           $_REQUEST["mco_productos__PDU_IMAGENPRODU"] = $mco_productos_data[0]["PDU_IMAGENPRODU"];
           $_REQUEST["mco_productos__PDU_STOCKMINIMO"] = $mco_productos_data[0]["PDU_STOCKMINIMO"];
           $_REQUEST["mco_productos__SUB_NOMBRECAT"] = $mco_productos_data[0]["SUB_NOMBRECAT"];
           $_REQUEST["mco_productos__SUB_UNIMEDIDA"] = $mco_productos_data[0]["SUB_UNIMEDIDA"];
           $_REQUEST["mco_productos__SUB_TALLA"] = $mco_productos_data[0]["SUB_TALLA"];
           $_REQUEST["mco_productos__SUB_GENERO"] = $mco_productos_data[0]["SUB_GENERO"];
           $_REQUEST["mco_productos__SUB_ESTADO"] = $mco_productos_data[0]["SUB_ESTADO"];

        }else{
		
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
        }
		
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

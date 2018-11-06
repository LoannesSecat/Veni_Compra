<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListDetalleinventa {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("detalleinventa__DIN_ID"))
           WebSession::setProperty("detalleinventa__DIN_ID",$detalleinventa__DIN_ID);

       if(!WebSession::issetProperty("detalleinventa__PDU_ID"))
           WebSession::setProperty("detalleinventa__PDU_ID",$detalleinventa__PDU_ID);

       if(!WebSession::issetProperty("detalleinventa__INV_ID"))
           WebSession::setProperty("detalleinventa__INV_ID",$detalleinventa__INV_ID);

       if(!WebSession::issetProperty("detalleinventa__DIN_LOTE"))
           WebSession::setProperty("detalleinventa__DIN_LOTE",$detalleinventa__DIN_LOTE);

       if(!WebSession::issetProperty("detalleinventa__DIN_CANTIDAD"))
           WebSession::setProperty("detalleinventa__DIN_CANTIDAD",$detalleinventa__DIN_CANTIDAD);

       if(!WebSession::issetProperty("detalleinventa__DIN_PRECIOVENTA"))
           WebSession::setProperty("detalleinventa__DIN_PRECIOVENTA",$detalleinventa__DIN_PRECIOVENTA);

       if(!WebSession::issetProperty("detalleinventa__DIN_FECHA_CADU"))
           WebSession::setProperty("detalleinventa__DIN_FECHA_CADU",$detalleinventa__DIN_FECHA_CADU);

       if(!WebSession::issetProperty("detalleinventa__DIN_EXIS_BIEN"))
           WebSession::setProperty("detalleinventa__DIN_EXIS_BIEN",$detalleinventa__DIN_EXIS_BIEN);

       if(!WebSession::issetProperty("detalleinventa__DIN_EXIS_MAL"))
           WebSession::setProperty("detalleinventa__DIN_EXIS_MAL",$detalleinventa__DIN_EXIS_MAL);

       if(!WebSession::issetProperty("detalleinventa__DIN_DEVOL_COMP"))
           WebSession::setProperty("detalleinventa__DIN_DEVOL_COMP",$detalleinventa__DIN_DEVOL_COMP);

       if(!WebSession::issetProperty("detalleinventa__DIN_DEVOL_VENT"))
           WebSession::setProperty("detalleinventa__DIN_DEVOL_VENT",$detalleinventa__DIN_DEVOL_VENT);

       return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMve_facturasdet {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mve_facturasdet__FDE_ID"))
           WebSession::setProperty("mve_facturasdet__FDE_ID",$mve_facturasdet__FDE_ID);

       if(!WebSession::issetProperty("mve_facturasdet__FDE_CANTIDAD"))
           WebSession::setProperty("mve_facturasdet__FDE_CANTIDAD",$mve_facturasdet__FDE_CANTIDAD);

       if(!WebSession::issetProperty("mve_facturasdet__FDE_PRECIOUNITA"))
           WebSession::setProperty("mve_facturasdet__FDE_PRECIOUNITA",$mve_facturasdet__FDE_PRECIOUNITA);

       if(!WebSession::issetProperty("mve_facturasdet__FAC_ID"))
           WebSession::setProperty("mve_facturasdet__FAC_ID",$mve_facturasdet__FAC_ID);

       if(!WebSession::issetProperty("mve_facturasdet__PDU_ID"))
           WebSession::setProperty("mve_facturasdet__PDU_ID",$mve_facturasdet__PDU_ID);

       if(!WebSession::issetProperty("mve_facturasdet__PPM_ID"))
           WebSession::setProperty("mve_facturasdet__PPM_ID",$mve_facturasdet__PPM_ID);

       return "success";  
    }

}

?>	

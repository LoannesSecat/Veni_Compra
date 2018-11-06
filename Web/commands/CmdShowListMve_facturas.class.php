<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMve_facturas {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mve_facturas__FAC_ID"))
           WebSession::setProperty("mve_facturas__FAC_ID",$mve_facturas__FAC_ID);

       if(!WebSession::issetProperty("mve_facturas__FAC_FECHACOMPRA"))
           WebSession::setProperty("mve_facturas__FAC_FECHACOMPRA",$mve_facturas__FAC_FECHACOMPRA);

       if(!WebSession::issetProperty("mve_facturas__FAC_TOTAL"))
           WebSession::setProperty("mve_facturas__FAC_TOTAL",$mve_facturas__FAC_TOTAL);

       if(!WebSession::issetProperty("mve_facturas__SUB_TIPOPAGO"))
           WebSession::setProperty("mve_facturas__SUB_TIPOPAGO",$mve_facturas__SUB_TIPOPAGO);

       if(!WebSession::issetProperty("mve_facturas__USU_ID"))
           WebSession::setProperty("mve_facturas__USU_ID",$mve_facturas__USU_ID);

       return "success";  
    }

}

?>	

<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMco_productos {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mco_productos__PDU_ID"))
           WebSession::setProperty("mco_productos__PDU_ID",$mco_productos__PDU_ID);

       if(!WebSession::issetProperty("mco_productos__PDU_NOMBRE"))
           WebSession::setProperty("mco_productos__PDU_NOMBRE",$mco_productos__PDU_NOMBRE);

       if(!WebSession::issetProperty("mco_productos__PDU_DESCRIPCION"))
           WebSession::setProperty("mco_productos__PDU_DESCRIPCION",$mco_productos__PDU_DESCRIPCION);

       if(!WebSession::issetProperty("mco_productos__PDU_IMAGENPRODU"))
           WebSession::setProperty("mco_productos__PDU_IMAGENPRODU",$mco_productos__PDU_IMAGENPRODU);

       if(!WebSession::issetProperty("mco_productos__PDU_STOCKMINIMO"))
           WebSession::setProperty("mco_productos__PDU_STOCKMINIMO",$mco_productos__PDU_STOCKMINIMO);

       if(!WebSession::issetProperty("mco_productos__SUB_NOMBRECAT"))
           WebSession::setProperty("mco_productos__SUB_NOMBRECAT",$mco_productos__SUB_NOMBRECAT);

       if(!WebSession::issetProperty("mco_productos__SUB_UNIMEDIDA"))
           WebSession::setProperty("mco_productos__SUB_UNIMEDIDA",$mco_productos__SUB_UNIMEDIDA);

       if(!WebSession::issetProperty("mco_productos__SUB_TALLA"))
           WebSession::setProperty("mco_productos__SUB_TALLA",$mco_productos__SUB_TALLA);

       if(!WebSession::issetProperty("mco_productos__SUB_GENERO"))
           WebSession::setProperty("mco_productos__SUB_GENERO",$mco_productos__SUB_GENERO);

       if(!WebSession::issetProperty("mco_productos__SUB_ESTADO"))
           WebSession::setProperty("mco_productos__SUB_ESTADO",$mco_productos__SUB_ESTADO);

       return "success";  
    }

}

?>	

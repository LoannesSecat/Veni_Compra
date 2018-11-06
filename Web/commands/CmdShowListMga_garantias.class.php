<?php
/**
 * @package vc2
 * @subpackage Commands
 */

require_once "Web/WebRequest.class.php";
/**
 * Comando para mostrar todos los registros de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class vc2CmdShowListMga_garantias {

	/**
	 * @return boolean 
	 */
	function execute()
    {
       extract($_REQUEST);
	   
       if(!WebSession::issetProperty("mga_garantias__GAR_ID"))
           WebSession::setProperty("mga_garantias__GAR_ID",$mga_garantias__GAR_ID);

       if(!WebSession::issetProperty("mga_garantias__GAR_DESCRIPDEVO"))
           WebSession::setProperty("mga_garantias__GAR_DESCRIPDEVO",$mga_garantias__GAR_DESCRIPDEVO);

       if(!WebSession::issetProperty("mga_garantias__GAR_CANTIDAD"))
           WebSession::setProperty("mga_garantias__GAR_CANTIDAD",$mga_garantias__GAR_CANTIDAD);

       if(!WebSession::issetProperty("mga_garantias__GAR_FOTOESTADO"))
           WebSession::setProperty("mga_garantias__GAR_FOTOESTADO",$mga_garantias__GAR_FOTOESTADO);

       if(!WebSession::issetProperty("mga_garantias__GAR_FECHASOLICI"))
           WebSession::setProperty("mga_garantias__GAR_FECHASOLICI",$mga_garantias__GAR_FECHASOLICI);

       if(!WebSession::issetProperty("mga_garantias__SUB_ESTADO"))
           WebSession::setProperty("mga_garantias__SUB_ESTADO",$mga_garantias__SUB_ESTADO);

       if(!WebSession::issetProperty("mga_garantias__SUB_RESPUESTA"))
           WebSession::setProperty("mga_garantias__SUB_RESPUESTA",$mga_garantias__SUB_RESPUESTA);

       if(!WebSession::issetProperty("mga_garantias__PDU_ID"))
           WebSession::setProperty("mga_garantias__PDU_ID",$mga_garantias__PDU_ID);

       if(!WebSession::issetProperty("mga_garantias__FAC_ID"))
           WebSession::setProperty("mga_garantias__FAC_ID",$mga_garantias__FAC_ID);

       return "success";  
    }

}

?>	

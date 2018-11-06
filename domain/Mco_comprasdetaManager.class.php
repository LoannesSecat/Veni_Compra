<?php		
/**
 * @package vc2
 * @subpackage Domain
 * @copyright Spyro Solutions
 */

/**
 * Constantes para el manejo de errores
 */
define("ERROR_DATO_EXISTE", 101);
define("ERROR_DATO_NO_EXISTE", 102);
define("EXITO_OPERACION_REALIZADA", 103);
define("ERROR_OPERACION_NO_REALIZADA", 105);

/**
 *
 * Clase manager de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_comprasdetaManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_comprasdetaManager()
    {
     $this->gateway = Application::getDataGateway("mco_comprasdeta");
   }

    /**
    * Metodo para adicionar datos a la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID)
    {
    	if($this->gateway->existMco_comprasdeta($CDE_ID) == 0){
       $CDE_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID);
       if($result){
        $this->UnsetRequest();
        return EXITO_OPERACION_REALIZADA;
      }
      else
      {
       return ERROR_OPERACION_NO_REALIZADA;
     }
   }
   else
    {       return $this->updateMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID)
    {
    	if($this->gateway->existMco_comprasdeta($CDE_ID) == 1){
       $result = $this->gateway->updateMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID);
       if($result){
        $this->UnsetRequest();
        return EXITO_OPERACION_REALIZADA;
      }
      else
      {
       return ERROR_OPERACION_NO_REALIZADA;
     }	
   }
   else
   {
     return ERROR_DATO_NO_EXISTE;
   }
 }
 
    /**
    * Metodo para eliminar datos de la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_comprasdeta($CDE_ID)
    {
    	if($this->gateway->existMco_comprasdeta($CDE_ID) == 1){
       $result = $this->gateway->deleteMco_comprasdeta($CDE_ID);
       if($result){
         $this->UnsetRequest();
         return EXITO_OPERACION_REALIZADA;
       }
       else
       {
         return ERROR_OPERACION_NO_REALIZADA;
       }
     }
     else
     {
       return ERROR_DATO_NO_EXISTE;
     }
   }
   
    /**
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_comprasdeta($CDE_ID)
    {
     $data_mco_comprasdeta = $this->gateway->getByIdMco_comprasdeta($CDE_ID);
     return $data_mco_comprasdeta;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_comprasdeta()
    {
     $data_mco_comprasdeta = $this->gateway->getAllMco_comprasdeta();
     return $data_mco_comprasdeta;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_comprasdeta
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_comprasdeta__CDE_ID"]);
      unset($_REQUEST["mco_comprasdeta__CDE_CANTIDAD"]);
      unset($_REQUEST["mco_comprasdeta__CDE_PRECIOCOMPR"]);
      unset($_REQUEST["mco_comprasdeta__COP_ID"]);
      unset($_REQUEST["mco_comprasdeta__PDU_ID"]);
    }
  }

  ?>	
  
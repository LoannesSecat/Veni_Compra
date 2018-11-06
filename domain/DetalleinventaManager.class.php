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
 * Clase manager de la tabla: detalleinventa
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class DetalleinventaManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function DetalleinventaManager()
    {
     $this->gateway = Application::getDataGateway("detalleinventa");
   }

    /**
    * Metodo para adicionar datos a la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return integer
    */
    function addDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT)
    {
    	if($this->gateway->existDetalleinventa($DIN_ID) == 0){
       $DIN_ID = $this->gateway->maxId();
       $result = $this->gateway->addDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT);
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
    {       return $this->updateDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return integer
    */
    function updateDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT)
    {
    	if($this->gateway->existDetalleinventa($DIN_ID) == 1){
       $result = $this->gateway->updateDetalleinventa($DIN_ID,$PDU_ID,$INV_ID,$DIN_LOTE,$DIN_CANTIDAD,$DIN_PRECIOVENTA,$DIN_FECHA_CADU,$DIN_EXIS_BIEN,$DIN_EXIS_MAL,$DIN_DEVOL_COMP,$DIN_DEVOL_VENT);
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
    * Metodo para eliminar datos de la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteDetalleinventa($DIN_ID)
    {
    	if($this->gateway->existDetalleinventa($DIN_ID) == 1){
       $result = $this->gateway->deleteDetalleinventa($DIN_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdDetalleinventa($DIN_ID)
    {
     $data_detalleinventa = $this->gateway->getByIdDetalleinventa($DIN_ID);
     return $data_detalleinventa;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return array
    */
    function getAllDetalleinventa()
    {
     $data_detalleinventa = $this->gateway->getAllDetalleinventa();
     return $data_detalleinventa;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: detalleinventa
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["detalleinventa__DIN_ID"]);
      unset($_REQUEST["detalleinventa__PDU_ID"]);
      unset($_REQUEST["detalleinventa__INV_ID"]);
      unset($_REQUEST["detalleinventa__DIN_LOTE"]);
      unset($_REQUEST["detalleinventa__DIN_CANTIDAD"]);
      unset($_REQUEST["detalleinventa__DIN_PRECIOVENTA"]);
      unset($_REQUEST["detalleinventa__DIN_FECHA_CADU"]);
      unset($_REQUEST["detalleinventa__DIN_EXIS_BIEN"]);
      unset($_REQUEST["detalleinventa__DIN_EXIS_MAL"]);
      unset($_REQUEST["detalleinventa__DIN_DEVOL_COMP"]);
      unset($_REQUEST["detalleinventa__DIN_DEVOL_VENT"]);
    }
  }

  ?>	
  
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
 * Clase manager de la tabla: mve_facturasdet
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mve_facturasdetManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mve_facturasdetManager()
    {
     $this->gateway = Application::getDataGateway("mve_facturasdet");
   }

    /**
    * Metodo para adicionar datos a la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return integer
    */
    function addMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID)
    {
    	if($this->gateway->existMve_facturasdet($FDE_ID) == 0){
       $FDE_ID = $this->gateway->maxId();
       $result = $this->gateway->addMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID);
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
    {       return $this->updateMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID)
    {
    	if($this->gateway->existMve_facturasdet($FDE_ID) == 1){
       $result = $this->gateway->updateMve_facturasdet($FDE_ID,$FDE_CANTIDAD,$FDE_PRECIOUNITA,$FAC_ID,$PDU_ID,$PPM_ID);
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
    * Metodo para eliminar datos de la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMve_facturasdet($FDE_ID)
    {
    	if($this->gateway->existMve_facturasdet($FDE_ID) == 1){
       $result = $this->gateway->deleteMve_facturasdet($FDE_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMve_facturasdet($FDE_ID)
    {
     $data_mve_facturasdet = $this->gateway->getByIdMve_facturasdet($FDE_ID);
     return $data_mve_facturasdet;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMve_facturasdet()
    {
     $data_mve_facturasdet = $this->gateway->getAllMve_facturasdet();
     return $data_mve_facturasdet;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mve_facturasdet
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mve_facturasdet__FDE_ID"]);
      unset($_REQUEST["mve_facturasdet__FDE_CANTIDAD"]);
      unset($_REQUEST["mve_facturasdet__FDE_PRECIOUNITA"]);
      unset($_REQUEST["mve_facturasdet__FAC_ID"]);
      unset($_REQUEST["mve_facturasdet__PDU_ID"]);
      unset($_REQUEST["mve_facturasdet__PPM_ID"]);
    }
  }

  ?>	
  
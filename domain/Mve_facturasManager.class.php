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
 * Clase manager de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mve_facturasManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mve_facturasManager()
    {
     $this->gateway = Application::getDataGateway("mve_facturas");
   }

    /**
    * Metodo para adicionar datos a la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return integer
    */
    function addMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID)
    {
    	if($this->gateway->existMve_facturas($FAC_ID) == 0){
       $FAC_ID = $this->gateway->maxId();
       $result = $this->gateway->addMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID);
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
    {       return $this->updateMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID)
    {
    	if($this->gateway->existMve_facturas($FAC_ID) == 1){
       $result = $this->gateway->updateMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID);
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
    * Metodo para eliminar datos de la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMve_facturas($FAC_ID)
    {
    	if($this->gateway->existMve_facturas($FAC_ID) == 1){
       $result = $this->gateway->deleteMve_facturas($FAC_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMve_facturas($FAC_ID)
    {
     $data_mve_facturas = $this->gateway->getByIdMve_facturas($FAC_ID);
     return $data_mve_facturas;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMve_facturas()
    {
     $data_mve_facturas = $this->gateway->getAllMve_facturas();
     return $data_mve_facturas;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mve_facturas
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mve_facturas__FAC_ID"]);
      unset($_REQUEST["mve_facturas__FAC_FECHACOMPRA"]);
      unset($_REQUEST["mve_facturas__FAC_TOTAL"]);
      unset($_REQUEST["mve_facturas__SUB_TIPOPAGO"]);
      unset($_REQUEST["mve_facturas__USU_ID"]);
    }
  }

  ?>	
  
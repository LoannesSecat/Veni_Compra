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
 * Clase manager de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_inventarioManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_inventarioManager()
    {
     $this->gateway = Application::getDataGateway("mco_inventario");
   }

    /**
    * Metodo para adicionar datos a la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_inventario($INV_ID,$INV_NOMBRE)
    {
    	if($this->gateway->existMco_inventario($INV_ID) == 0){
       $INV_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_inventario($INV_ID,$INV_NOMBRE);
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
    {       return $this->updateMco_inventario($INV_ID,$INV_NOMBRE);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_inventario($INV_ID,$INV_NOMBRE)
    {
    	if($this->gateway->existMco_inventario($INV_ID) == 1){
       $result = $this->gateway->updateMco_inventario($INV_ID,$INV_NOMBRE);
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
    * Metodo para eliminar datos de la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_inventario($INV_ID)
    {
    	if($this->gateway->existMco_inventario($INV_ID) == 1){
       $result = $this->gateway->deleteMco_inventario($INV_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_inventario($INV_ID)
    {
     $data_mco_inventario = $this->gateway->getByIdMco_inventario($INV_ID);
     return $data_mco_inventario;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_inventario()
    {
     $data_mco_inventario = $this->gateway->getAllMco_inventario();
     return $data_mco_inventario;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_inventario
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_inventario__INV_ID"]);
      unset($_REQUEST["mco_inventario__INV_NOMBRE"]);
    }
  }

  ?>	
  
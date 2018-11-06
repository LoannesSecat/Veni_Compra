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
 * Clase manager de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_comprasprovManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_comprasprovManager()
    {
     $this->gateway = Application::getDataGateway("mco_comprasprov");
   }

    /**
    * Metodo para adicionar datos a la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID)
    {
    	if($this->gateway->existMco_comprasprov($COP_ID) == 0){
       $COP_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID);
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
    {       return $this->updateMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID)
    {
    	if($this->gateway->existMco_comprasprov($COP_ID) == 1){
       $result = $this->gateway->updateMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID);
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
    * Metodo para eliminar datos de la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_comprasprov($COP_ID)
    {
    	if($this->gateway->existMco_comprasprov($COP_ID) == 1){
       $result = $this->gateway->deleteMco_comprasprov($COP_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_comprasprov($COP_ID)
    {
     $data_mco_comprasprov = $this->gateway->getByIdMco_comprasprov($COP_ID);
     return $data_mco_comprasprov;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_comprasprov()
    {
     $data_mco_comprasprov = $this->gateway->getAllMco_comprasprov();
     return $data_mco_comprasprov;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_comprasprov
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_comprasprov__COP_ID"]);
      unset($_REQUEST["mco_comprasprov__COP_FECHACOMPRA"]);
      unset($_REQUEST["mco_comprasprov__COP_TOTALCOMPRA"]);
      unset($_REQUEST["mco_comprasprov__USU_ID"]);
      unset($_REQUEST["mco_comprasprov__PVE_ID"]);
    }
  }

  ?>	
  
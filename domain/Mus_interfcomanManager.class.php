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
 * Clase manager de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_interfcomanManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_interfcomanManager()
    {
     $this->gateway = Application::getDataGateway("mus_interfcoman");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID)
    {
    	if($this->gateway->existMus_interfcoman($ITC_ID) == 0){
       $ITC_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID);
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
    {       return $this->updateMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID)
    {
    	if($this->gateway->existMus_interfcoman($ITC_ID) == 1){
       $result = $this->gateway->updateMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID);
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
    * Metodo para eliminar datos de la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_interfcoman($ITC_ID)
    {
    	if($this->gateway->existMus_interfcoman($ITC_ID) == 1){
       $result = $this->gateway->deleteMus_interfcoman($ITC_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_interfcoman($ITC_ID)
    {
     $data_mus_interfcoman = $this->gateway->getByIdMus_interfcoman($ITC_ID);
     return $data_mus_interfcoman;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_interfcoman()
    {
     $data_mus_interfcoman = $this->gateway->getAllMus_interfcoman();
     return $data_mus_interfcoman;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_interfcoman
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_interfcoman__ITC_ID"]);
      unset($_REQUEST["mus_interfcoman__MUS_COMANPER_COP_ID"]);
      unset($_REQUEST["mus_interfcoman__MUS_INTERPERM_INP_ID"]);
    }
  }

  ?>	
  
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
 * Clase manager de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_rolinfcomManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_rolinfcomManager()
    {
     $this->gateway = Application::getDataGateway("mus_rolinfcom");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID)
    {
    	if($this->gateway->existMus_rolinfcom($RIC_ID) == 0){
       $RIC_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID);
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
    {       return $this->updateMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID)
    {
    	if($this->gateway->existMus_rolinfcom($RIC_ID) == 1){
       $result = $this->gateway->updateMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID);
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
    * Metodo para eliminar datos de la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_rolinfcom($RIC_ID)
    {
    	if($this->gateway->existMus_rolinfcom($RIC_ID) == 1){
       $result = $this->gateway->deleteMus_rolinfcom($RIC_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_rolinfcom($RIC_ID)
    {
     $data_mus_rolinfcom = $this->gateway->getByIdMus_rolinfcom($RIC_ID);
     return $data_mus_rolinfcom;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_rolinfcom()
    {
     $data_mus_rolinfcom = $this->gateway->getAllMus_rolinfcom();
     return $data_mus_rolinfcom;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_rolinfcom
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_rolinfcom__RIC_ID"]);
      unset($_REQUEST["mus_rolinfcom__MUS_INTERFCOMAN_ITC_ID"]);
      unset($_REQUEST["mus_rolinfcom__MUS_ROLES_ROL_ID"]);
    }
  }

  ?>	
  
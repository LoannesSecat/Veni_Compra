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
 * Clase manager de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_producpromoManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_producpromoManager()
    {
     $this->gateway = Application::getDataGateway("mco_producpromo");
   }

    /**
    * Metodo para adicionar datos a la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM)
    {
    	if($this->gateway->existMco_producpromo($PPM_ID) == 0){
       $PPM_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM);
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
    {       return $this->updateMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM)
    {
    	if($this->gateway->existMco_producpromo($PPM_ID) == 1){
       $result = $this->gateway->updateMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM);
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
    * Metodo para eliminar datos de la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_producpromo($PPM_ID)
    {
    	if($this->gateway->existMco_producpromo($PPM_ID) == 1){
       $result = $this->gateway->deleteMco_producpromo($PPM_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_producpromo($PPM_ID)
    {
     $data_mco_producpromo = $this->gateway->getByIdMco_producpromo($PPM_ID);
     return $data_mco_producpromo;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_producpromo()
    {
     $data_mco_producpromo = $this->gateway->getAllMco_producpromo();
     return $data_mco_producpromo;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_producpromo
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_producpromo__PPM_ID"]);
      unset($_REQUEST["mco_producpromo__PDU_ID"]);
      unset($_REQUEST["mco_producpromo__PPM_FECHAINI"]);
      unset($_REQUEST["mco_producpromo__PPM_FECHAFIN"]);
      unset($_REQUEST["mco_producpromo__PPM_PRECIOPROM"]);
    }
  }

  ?>	
  
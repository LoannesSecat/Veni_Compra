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
 * Clase manager de la tabla: mus_interperm
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_interpermManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_interpermManager()
    {
     $this->gateway = Application::getDataGateway("mus_interperm");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_interperm($INP_ID,$INP_NOMBRE)
    {
    	if($this->gateway->existMus_interperm($INP_ID) == 0){
       $INP_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_interperm($INP_ID,$INP_NOMBRE);
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
    {       return $this->updateMus_interperm($INP_ID,$INP_NOMBRE);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_interperm($INP_ID,$INP_NOMBRE)
    {
    	if($this->gateway->existMus_interperm($INP_ID) == 1){
       $result = $this->gateway->updateMus_interperm($INP_ID,$INP_NOMBRE);
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
    * Metodo para eliminar datos de la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_interperm($INP_ID)
    {
    	if($this->gateway->existMus_interperm($INP_ID) == 1){
       $result = $this->gateway->deleteMus_interperm($INP_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_interperm($INP_ID)
    {
     $data_mus_interperm = $this->gateway->getByIdMus_interperm($INP_ID);
     return $data_mus_interperm;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_interperm()
    {
     $data_mus_interperm = $this->gateway->getAllMus_interperm();
     return $data_mus_interperm;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_interperm
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_interperm__INP_ID"]);
      unset($_REQUEST["mus_interperm__INP_NOMBRE"]);
    }
  }

  ?>	
  
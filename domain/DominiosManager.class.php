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
 * Clase manager de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class DominiosManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function DominiosManager()
    {
     $this->gateway = Application::getDataGateway("dominios");
   }

    /**
    * Metodo para adicionar datos a la tabla: dominios
    * @author SpyroFrameWork
    * @return integer
    */
    function addDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO)
    {
    	if($this->gateway->existDominios($DOM_ID) == 0){
       $DOM_ID = $this->gateway->maxId();
       $result = $this->gateway->addDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO);
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
    {       return $this->updateDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: dominios
    * @author SpyroFrameWork
    * @return integer
    */
    function updateDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO)
    {
    	if($this->gateway->existDominios($DOM_ID) == 1){
       $result = $this->gateway->updateDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO);
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
    * Metodo para eliminar datos de la tabla: dominios
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteDominios($DOM_ID)
    {
    	if($this->gateway->existDominios($DOM_ID) == 1){
       $result = $this->gateway->deleteDominios($DOM_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: dominios
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdDominios($DOM_ID)
    {
     $data_dominios = $this->gateway->getByIdDominios($DOM_ID);
     return $data_dominios;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: dominios
    * @author SpyroFrameWork
    * @return array
    */
    function getAllDominios()
    {
     $data_dominios = $this->gateway->getAllDominios();
     return $data_dominios;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: dominios
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["dominios__DOM_ID"]);
      unset($_REQUEST["dominios__DOM__NOMBRE"]);
      unset($_REQUEST["dominios__DOM_USO"]);
    }
  }

  ?>	
  
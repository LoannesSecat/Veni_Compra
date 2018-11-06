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
 * Clase manager de la tabla: subdominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class SubdominiosManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function SubdominiosManager()
    {
     $this->gateway = Application::getDataGateway("subdominios");
   }

    /**
    * Metodo para adicionar datos a la tabla: subdominios
    * @author SpyroFrameWork
    * @return integer
    */
    function addSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2)
    {
    	if($this->gateway->existSubdominios($SUB_ID) == 0){
       $SUB_ID = $this->gateway->maxId();
       $result = $this->gateway->addSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2);
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
    {       return $this->updateSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: subdominios
    * @author SpyroFrameWork
    * @return integer
    */
    function updateSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2)
    {
    	if($this->gateway->existSubdominios($SUB_ID) == 1){
       $result = $this->gateway->updateSubdominios($SUB_ID,$DOMINIOS_DOM_ID,$SUB_VALOR,$SUB_DESCRIPCION,$SUB_AUX1,$SUB_AUX2);
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
    * Metodo para eliminar datos de la tabla: subdominios
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteSubdominios($SUB_ID)
    {
    	if($this->gateway->existSubdominios($SUB_ID) == 1){
       $result = $this->gateway->deleteSubdominios($SUB_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: subdominios
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdSubdominios($SUB_ID)
    {
     $data_subdominios = $this->gateway->getByIdSubdominios($SUB_ID);
     return $data_subdominios;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: subdominios
    * @author SpyroFrameWork
    * @return array
    */
    function getAllSubdominios()
    {
     $data_subdominios = $this->gateway->getAllSubdominios();
     return $data_subdominios;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: subdominios
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["subdominios__SUB_ID"]);
      unset($_REQUEST["subdominios__DOMINIOS_DOM_ID"]);
      unset($_REQUEST["subdominios__SUB_VALOR"]);
      unset($_REQUEST["subdominios__SUB_DESCRIPCION"]);
      unset($_REQUEST["subdominios__SUB_AUX1"]);
      unset($_REQUEST["subdominios__SUB_AUX2"]);
    }
  }

  ?>	
  
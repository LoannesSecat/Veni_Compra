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
 * Clase manager de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_comanperManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_comanperManager()
    {
     $this->gateway = Application::getDataGateway("mus_comanper");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_comanper($COP_ID,$COP_NOMBRE)
    {
    	if($this->gateway->existMus_comanper($COP_ID) == 0){
       $COP_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_comanper($COP_ID,$COP_NOMBRE);
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
    {       return $this->updateMus_comanper($COP_ID,$COP_NOMBRE);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_comanper($COP_ID,$COP_NOMBRE)
    {
    	if($this->gateway->existMus_comanper($COP_ID) == 1){
       $result = $this->gateway->updateMus_comanper($COP_ID,$COP_NOMBRE);
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
    * Metodo para eliminar datos de la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_comanper($COP_ID)
    {
    	if($this->gateway->existMus_comanper($COP_ID) == 1){
       $result = $this->gateway->deleteMus_comanper($COP_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_comanper($COP_ID)
    {
     $data_mus_comanper = $this->gateway->getByIdMus_comanper($COP_ID);
     return $data_mus_comanper;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_comanper()
    {
     $data_mus_comanper = $this->gateway->getAllMus_comanper();
     return $data_mus_comanper;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_comanper
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_comanper__COP_ID"]);
      unset($_REQUEST["mus_comanper__COP_NOMBRE"]);
    }
  }

  ?>	
  
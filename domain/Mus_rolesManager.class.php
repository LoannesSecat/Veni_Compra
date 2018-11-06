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
 * Clase manager de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_rolesManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_rolesManager()
    {
     $this->gateway = Application::getDataGateway("mus_roles");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_roles
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_roles($ROL_ID,$ROL_NOMBRE)
    {
    	if($this->gateway->existMus_roles($ROL_ID) == 0){
       $ROL_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_roles($ROL_ID,$ROL_NOMBRE);
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
    {       return $this->updateMus_roles($ROL_ID,$ROL_NOMBRE);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_roles
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_roles($ROL_ID,$ROL_NOMBRE)
    {
    	if($this->gateway->existMus_roles($ROL_ID) == 1){
       $result = $this->gateway->updateMus_roles($ROL_ID,$ROL_NOMBRE);
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
    * Metodo para eliminar datos de la tabla: mus_roles
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_roles($ROL_ID)
    {
    	if($this->gateway->existMus_roles($ROL_ID) == 1){
       $result = $this->gateway->deleteMus_roles($ROL_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_roles
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_roles($ROL_ID)
    {
     $data_mus_roles = $this->gateway->getByIdMus_roles($ROL_ID);
     return $data_mus_roles;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_roles
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_roles()
    {
     $data_mus_roles = $this->gateway->getAllMus_roles();
     return $data_mus_roles;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_roles
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_roles__ROL_ID"]);
      unset($_REQUEST["mus_roles__ROL_NOMBRE"]);
    }
  }

  ?>	
  
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
 * Clase manager de la tabla: mus_usuarios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mus_usuariosManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mus_usuariosManager()
    {
     $this->gateway = Application::getDataGateway("mus_usuarios");
   }

    /**
    * Metodo para adicionar datos a la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return integer
    */
    function addMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID)
    {
    	if($this->gateway->existMus_usuarios($USU_ID) == 0){
       $USU_ID = $this->gateway->maxId();
       $result = $this->gateway->addMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID);
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
    {       return $this->updateMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID)
    {
    	if($this->gateway->existMus_usuarios($USU_ID) == 1){
       $result = $this->gateway->updateMus_usuarios($USU_ID,$USU_NOMBRE,$USU_APELLIDO,$USU_FECHA_NACI,$USU_DIRECCION,$USU_EMAIL,$USU_CELULAR,$USU_CONTRASENA,$SUB_SEXO,$ROL_ID);
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
    * Metodo para eliminar datos de la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMus_usuarios($USU_ID)
    {
    	if($this->gateway->existMus_usuarios($USU_ID) == 1){
       $result = $this->gateway->deleteMus_usuarios($USU_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMus_usuarios($USU_ID)
    {
     $data_mus_usuarios = $this->gateway->getByIdMus_usuarios($USU_ID);
     return $data_mus_usuarios;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMus_usuarios()
    {
     $data_mus_usuarios = $this->gateway->getAllMus_usuarios();
     return $data_mus_usuarios;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mus_usuarios
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mus_usuarios__USU_ID"]);
      unset($_REQUEST["mus_usuarios__USU_NOMBRE"]);
      unset($_REQUEST["mus_usuarios__USU_APELLIDO"]);
      unset($_REQUEST["mus_usuarios__USU_FECHA_NACI"]);
      unset($_REQUEST["mus_usuarios__USU_DIRECCION"]);
      unset($_REQUEST["mus_usuarios__USU_EMAIL"]);
      unset($_REQUEST["mus_usuarios__USU_CELULAR"]);
      unset($_REQUEST["mus_usuarios__USU_CONTRASENA"]);
      unset($_REQUEST["mus_usuarios__SUB_SEXO"]);
      unset($_REQUEST["mus_usuarios__ROL_ID"]);
    }
  }

  ?>	
  
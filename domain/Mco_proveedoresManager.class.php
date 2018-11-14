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
define("ERROR_EMAIL_EXISTE",106);

/**
 *
 * Clase manager de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_proveedoresManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_proveedoresManager()
    {
     $this->gateway = Application::getDataGateway("mco_proveedores");
   }


        /**
    * Metodo para validar la existencia del correo del usuario
    * @author SpyroFrameWork
    * @return integer
    */
    function existeEmailProveedor($email)
    {
    	if($this->gateway->existeEmailProveedor($email) == 1){ 
        return ERROR_EMAIL_EXISTE;
      }
      else
      {
        return EXITO_OPERACION_REALIZADA;
      }
    }

       /**
    * Metodo para validar la existencia de el usuario
    * @author SpyroFrameWork
    * @return integer
    */
    function existeProveedor($codigo)
    {
    	if($this->gateway->existMco_proveedores($codigo) == 1){ 
        return ERROR_DATO_EXISTE;
      }
      else
      {
        return EXITO_OPERACION_REALIZADA;
      }
    }

    /**
    * Metodo para adicionar datos a la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL)
    {
    	if($this->gateway->existMco_proveedores($PVE_ID) == 0){
       $PVE_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL);
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
    {       return $this->updateMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL)
    {
    	if($this->gateway->existMco_proveedores($PVE_ID) == 1){
       $result = $this->gateway->updateMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL);
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
    * Metodo para eliminar datos de la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_proveedores($PVE_ID)
    {
    	if($this->gateway->existMco_proveedores($PVE_ID) == 1){
       $result = $this->gateway->deleteMco_proveedores($PVE_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_proveedores($PVE_ID)
    {
     $data_mco_proveedores = $this->gateway->getByIdMco_proveedores($PVE_ID);
     return $data_mco_proveedores;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_proveedores()
    {
     $data_mco_proveedores = $this->gateway->getAllMco_proveedores();
     return $data_mco_proveedores;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_proveedores
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_proveedores__PVE_ID"]);
      unset($_REQUEST["mco_proveedores__PVE_NOMBRE"]);
      unset($_REQUEST["mco_proveedores__PVE_DIRECCION"]);
      unset($_REQUEST["mco_proveedores__PVE_TELEFONO"]);
      unset($_REQUEST["mco_proveedores__PVE_CELULAR"]);
      unset($_REQUEST["mco_proveedores__PVE_EMAIL"]);
    }
  }

  ?>	
  
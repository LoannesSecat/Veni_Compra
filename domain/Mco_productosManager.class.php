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
 * Clase manager de la tabla: mco_productos
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mco_productosManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mco_productosManager()
    {
     $this->gateway = Application::getDataGateway("mco_productos");
   }

    /**
    * Metodo para adicionar datos a la tabla: mco_productos
    * @author SpyroFrameWork
    * @return integer
    */
    function addMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO)
    {
    	if($this->gateway->existMco_productos($PDU_ID) == 0){
       $PDU_ID = $this->gateway->maxId();
       $result = $this->gateway->addMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO);
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
    {       return $this->updateMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mco_productos
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO)
    {
    	if($this->gateway->existMco_productos($PDU_ID) == 1){
       $result = $this->gateway->updateMco_productos($PDU_ID,$PDU_NOMBRE,$PDU_DESCRIPCION,$PDU_IMAGENPRODU,$PDU_STOCKMINIMO,$SUB_NOMBRECAT,$SUB_UNIMEDIDA,$SUB_TALLA,$SUB_GENERO,$SUB_ESTADO);
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
    * Metodo para eliminar datos de la tabla: mco_productos
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMco_productos($PDU_ID)
    {
    	if($this->gateway->existMco_productos($PDU_ID) == 1){
       $result = $this->gateway->deleteMco_productos($PDU_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mco_productos
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMco_productos($PDU_ID)
    {
     $data_mco_productos = $this->gateway->getByIdMco_productos($PDU_ID);
     return $data_mco_productos;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mco_productos
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMco_productos()
    {
     $data_mco_productos = $this->gateway->getAllMco_productos();
     return $data_mco_productos;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mco_productos
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mco_productos__PDU_ID"]);
      unset($_REQUEST["mco_productos__PDU_NOMBRE"]);
      unset($_REQUEST["mco_productos__PDU_DESCRIPCION"]);
      unset($_REQUEST["mco_productos__PDU_IMAGENPRODU"]);
      unset($_REQUEST["mco_productos__PDU_STOCKMINIMO"]);
      unset($_REQUEST["mco_productos__SUB_NOMBRECAT"]);
      unset($_REQUEST["mco_productos__SUB_UNIMEDIDA"]);
      unset($_REQUEST["mco_productos__SUB_TALLA"]);
      unset($_REQUEST["mco_productos__SUB_GENERO"]);
      unset($_REQUEST["mco_productos__SUB_ESTADO"]);
    }
  }

  ?>	
  
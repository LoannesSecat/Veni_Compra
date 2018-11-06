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
 * Clase manager de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions
 */
class Mga_garantiasManager
{
    /**
    * objeto para la instancia de la compuerta
    */
    var $gateway;
    
    /**
    * Metodo constructor de la clase
    * @author SpyroFrameWork 
    */
    function Mga_garantiasManager()
    {
     $this->gateway = Application::getDataGateway("mga_garantias");
   }

    /**
    * Metodo para adicionar datos a la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return integer
    */
    function addMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID)
    {
    	if($this->gateway->existMga_garantias($GAR_ID) == 0){
       $GAR_ID = $this->gateway->maxId();
       $result = $this->gateway->addMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID);
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
    {       return $this->updateMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID);
          	//return ERROR_DATO_EXISTE;
    }
  }

    /**
    * Metodo para actualizar datos de la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return integer
    */
    function updateMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID)
    {
    	if($this->gateway->existMga_garantias($GAR_ID) == 1){
       $result = $this->gateway->updateMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID);
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
    * Metodo para eliminar datos de la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return integer
    */
    function deleteMga_garantias($GAR_ID)
    {
    	if($this->gateway->existMga_garantias($GAR_ID) == 1){
       $result = $this->gateway->deleteMga_garantias($GAR_ID);
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
    * Metodo para consultar los datos por la llave primaria de la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return array
    */
    function getByIdMga_garantias($GAR_ID)
    {
     $data_mga_garantias = $this->gateway->getByIdMga_garantias($GAR_ID);
     return $data_mga_garantias;
   }

    /**
    * Metodo para consultar todos los datos de la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return array
    */
    function getAllMga_garantias()
    {
     $data_mga_garantias = $this->gateway->getAllMga_garantias();
     return $data_mga_garantias;

   }

    /**
    * Metodo para limpiar los datos del _REQUEST de la tabla: mga_garantias
    * @author SpyroFrameWork
    * @return void
    */
    function UnsetRequest()
    {
     
      unset($_REQUEST["mga_garantias__GAR_ID"]);
      unset($_REQUEST["mga_garantias__GAR_DESCRIPDEVO"]);
      unset($_REQUEST["mga_garantias__GAR_CANTIDAD"]);
      unset($_REQUEST["mga_garantias__GAR_FOTOESTADO"]);
      unset($_REQUEST["mga_garantias__GAR_FECHASOLICI"]);
      unset($_REQUEST["mga_garantias__SUB_ESTADO"]);
      unset($_REQUEST["mga_garantias__SUB_RESPUESTA"]);
      unset($_REQUEST["mga_garantias__PDU_ID"]);
      unset($_REQUEST["mga_garantias__FAC_ID"]);
    }
  }

  ?>	
  
<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_proveedores
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */

class Mco_proveedores
{
   /**
     * conexion de bases de datos.
     */
   var $connection;
     /**
     * recurso de base de datos
     */
     var $consult;

  /**
  * Metodo constructor de la clase
  * @author SpyroFrameWork
  */
  function Mco_proveedores()  {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }

 /**
  * Metodo para Inciar la Transaccion en la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */  
 function begin()    {
  $this->connection=BeginTrans();
}

/**
  * Metodo para guardar la transaccion en la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */  
function commit()  {
  $this->connection=CommitTrans();
}

/**
  * Metodo para abortar la transaccion en la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */  
function rollback($result)  {
  $this->connection=RollbackTrans();
} 

  /**
  * Metodo para validar si un registro existe en la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */
  function existeEmailProveedor($PVE_EMAIL)  {
    
    $sql = "SELECT * FROM mco_proveedores WHERE PVE_EMAIL='$PVE_EMAIL'";
    $this->consult = $this->connection->Execute($sql);
    if ($this->consult->fields)
     return 1;
 }


  /**
  * Metodo para validar si un registro existe en la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */
  function existMco_proveedores($PVE_ID)  {
   $sql = "SELECT * FROM mco_proveedores WHERE PVE_ID='$PVE_ID'";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}

  /**
  * Metodo para consultar el Id max de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return int
  */
  function maxId()  {
   $sql = "SELECT max(PVE_ID) as id FROM mco_proveedores ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;
 }

  /**
  * Metodo para adicionar un registro a la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return boolean
  */
  function addMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL)  {
   $sql="INSERT INTO mco_proveedores VALUES($PVE_ID,'$PVE_NOMBRE','$PVE_DIRECCION','$PVE_TELEFONO','$PVE_CELULAR','$PVE_EMAIL')";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

  /**
  * Metodo para actualizar un registro de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return boolean
  */
  function updateMco_proveedores($PVE_ID,$PVE_NOMBRE,$PVE_DIRECCION,$PVE_TELEFONO,$PVE_CELULAR,$PVE_EMAIL)  {
    $sql="UPDATE mco_proveedores SET PVE_NOMBRE='$PVE_NOMBRE',PVE_DIRECCION='$PVE_DIRECCION',PVE_TELEFONO='$PVE_TELEFONO',PVE_CELULAR='$PVE_CELULAR',PVE_EMAIL='$PVE_EMAIL' WHERE PVE_ID=$PVE_ID";
    $this->consult=$this->connection->Execute($sql);
    return $this->consult;
  }

    /**
  * Metodo para eliminar un registro de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return boolean
  */
    function deleteMco_proveedores($PVE_ID)  {
      $sql="DELETE FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
      $this->consult = @$this->connection->Execute($sql);
      return $this->consult;
    }

     /**
  * Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
     function getByIdMco_proveedores($PVE_ID)  {
      $sql="SELECT * FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
      return $this->connection->GetAll($sql);
    }

    /**
  * Metodo para consultar todos los registros de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
    function getAllMco_proveedores()  {
      $sql="SELECT * FROM mco_proveedores";
      return $this->connection->GetAll($sql); 
    }

    /**
  * Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_proveedores
  * @author Spyro FrameWork
  * @return array
  */ 
    function getAllBykeyword($keyword,$condiction,$field)  {

      $sql="SELECT * FROM mco_proveedores WHERE ";

      switch ($condiction) {

      case "=": //Equal
      $condiction_sql ="$field = '$keyword'"; 
      break;

      case "!=": //Different  
      $condiction_sql ="$field !='$keyword'"; 
      break;  

      case "_%": //Begin With
      $condiction_sql ="$field like '$keyword%'";
      break;  

      case "%_": //End With
      $condiction_sql ="$field like '%$keyword' "; 
      break;  

      case "%": //End Content
      $condiction_sql ="$field like '%$keyword%' "; 
      break;              

    }
    $sql .= $condiction_sql;  

    return $this->connection->GetAll($sql);
  } 

  /**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_ID de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
  function getPVE_ID($PVE_ID)  {
    $sql="SELECT PVE_ID FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
    return $this->connection->GetAll($sql);
  }

 /**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_NOMBRE de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
 function getPVE_NOMBRE($PVE_ID) {
  $sql="SELECT PVE_NOMBRE FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
  return $this->connection->GetAll($sql);
}

/**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_DIRECCION de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
function getPVE_DIRECCION($PVE_ID)  {
  $sql="SELECT PVE_DIRECCION FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
  return $this->connection->GetAll($sql);
}

/**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_TELEFONO de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
function getPVE_TELEFONO($PVE_ID)  {
  $sql="SELECT PVE_TELEFONO FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
  return $this->connection->GetAll($sql);
}


  /**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_CELULAR de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
  function getPVE_CELULAR($PVE_ID)  {
    $sql="SELECT PVE_CELULAR FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
    return $this->connection->GetAll($sql);
  }


  /**
  * Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_EMAIL de la tabla: mco_proveedores
  * @author SpyroFrameWork
  * @return array
  */
  function getPVE_EMAIL($PVE_ID)  {
    $sql="SELECT PVE_EMAIL FROM mco_proveedores WHERE PVE_ID=$PVE_ID";
    return $this->connection->GetAll($sql);
  }
}
?>
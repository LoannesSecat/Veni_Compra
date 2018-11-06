<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_inventario
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mco_inventario
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
 function Mco_inventario()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return int
	*/
 function existMco_inventario($INV_ID)
 {
   $sql = "SELECT * FROM mco_inventario WHERE INV_ID=$INV_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(INV_ID) as id FROM mco_inventario ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMco_inventario($INV_ID,$INV_NOMBRE)
 {
  $sql="INSERT INTO mco_inventario VALUES($INV_ID,'$INV_NOMBRE')";
  $this->consult = $this->connection->Execute($sql);
  return $this->consult;
}

 	/**
	* Metodo para actualizar un registro de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMco_inventario($INV_ID,$INV_NOMBRE)
 {
  $sql="UPDATE mco_inventario SET INV_NOMBRE='$INV_NOMBRE' WHERE INV_ID=$INV_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMco_inventario($INV_ID)
 {
  $sql="DELETE FROM mco_inventario WHERE INV_ID=$INV_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMco_inventario($INV_ID)
 {
  $sql="SELECT * FROM mco_inventario WHERE INV_ID=$INV_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMco_inventario()
 {
  $sql="SELECT * FROM mco_inventario";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_inventario
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mco_inventario WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna INV_ID de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return array
	*/
 function getINV_ID($INV_ID)
 {
  $sql="SELECT INV_ID FROM mco_inventario WHERE INV_ID=$INV_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna INV_NOMBRE de la tabla: mco_inventario
	* @author SpyroFrameWork
	* @return array
	*/
 function getINV_NOMBRE($INV_ID)
 {
  $sql="SELECT INV_NOMBRE FROM mco_inventario WHERE INV_ID=$INV_ID";
  return $this->connection->GetAll($sql);
}


}?>
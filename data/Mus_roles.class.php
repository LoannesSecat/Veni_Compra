<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mus_roles
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mus_roles
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
 function Mus_roles()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mus_roles
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mus_roles
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mus_roles
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mus_roles
	* @author SpyroFrameWork
	* @return int
	*/
 function existMus_roles($ROL_ID)
 {
   $sql = "SELECT * FROM mus_roles WHERE ROL_ID=$ROL_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(ROL_ID) as id FROM mus_roles ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mus_roles
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMus_roles($ROL_ID,$ROL_NOMBRE)
 {
   $sql="INSERT INTO mus_roles VALUES($ROL_ID,'$ROL_NOMBRE')";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMus_roles($ROL_ID,$ROL_NOMBRE)
 {
  $sql="UPDATE mus_roles SET ROL_NOMBRE='$ROL_NOMBRE' WHERE ROL_ID=$ROL_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMus_roles($ROL_ID)
 {
  $sql="DELETE FROM mus_roles WHERE ROL_ID=$ROL_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMus_roles($ROL_ID)
 {
  $sql="SELECT * FROM mus_roles WHERE ROL_ID=$ROL_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMus_roles()
 {
  $sql="SELECT * FROM mus_roles";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mus_roles
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mus_roles WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna ROL_ID de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return array
	*/
 function getROL_ID($ROL_ID)
 {
  $sql="SELECT ROL_ID FROM mus_roles WHERE ROL_ID=$ROL_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna ROL_NOMBRE de la tabla: mus_roles
	* @author SpyroFrameWork
	* @return array
	*/
 function getROL_NOMBRE($ROL_ID)
 {
  $sql="SELECT ROL_NOMBRE FROM mus_roles WHERE ROL_ID=$ROL_ID";
  return $this->connection->GetAll($sql);
}


}?>
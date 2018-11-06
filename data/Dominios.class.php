<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: dominios
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Dominios
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
 function Dominios()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: dominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: dominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: dominios
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: dominios
	* @author SpyroFrameWork
	* @return int
	*/
 function existDominios($DOM_ID)
 {
   $sql = "SELECT * FROM dominios WHERE DOM_ID=$DOM_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: dominios
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(DOM_ID) as id FROM dominios ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: dominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO)
 {
  $sql="INSERT INTO dominios VALUES($DOM_ID,'$DOM__NOMBRE','$DOM_USO')";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: dominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateDominios($DOM_ID,$DOM__NOMBRE,$DOM_USO)
 {
  $sql="UPDATE dominios SET DOM__NOMBRE='$DOM__NOMBRE',DOM_USO='$DOM_USO' WHERE DOM_ID=$DOM_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: dominios
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteDominios($DOM_ID)
 {
  $sql="DELETE FROM dominios WHERE DOM_ID=$DOM_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: dominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdDominios($DOM_ID)
 {
  $sql="SELECT * FROM dominios WHERE DOM_ID=$DOM_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: dominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllDominios()
 {
  $sql="SELECT * FROM dominios";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla dominios
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM dominios WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DOM_ID de la tabla: dominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getDOM_ID($DOM_ID)
 {
  $sql="SELECT DOM_ID FROM dominios WHERE DOM_ID=$DOM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DOM__NOMBRE de la tabla: dominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getDOM__NOMBRE($DOM_ID)
 {
  $sql="SELECT DOM__NOMBRE FROM dominios WHERE DOM_ID=$DOM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna DOM_USO de la tabla: dominios
	* @author SpyroFrameWork
	* @return array
	*/
 function getDOM_USO($DOM_ID)
 {
  $sql="SELECT DOM_USO FROM dominios WHERE DOM_ID=$DOM_ID";
  return $this->connection->GetAll($sql);
}


}?>
<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mus_rolinfcom
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mus_rolinfcom
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
 function Mus_rolinfcom()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return int
	*/
 function existMus_rolinfcom($RIC_ID)
 {
   $sql = "SELECT * FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(RIC_ID) as id FROM mus_rolinfcom ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID)
 {
   $sql="INSERT INTO mus_rolinfcom VALUES($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMus_rolinfcom($RIC_ID,$MUS_INTERFCOMAN_ITC_ID,$MUS_ROLES_ROL_ID)
 {
  $sql="UPDATE mus_rolinfcom SET MUS_INTERFCOMAN_ITC_ID=$MUS_INTERFCOMAN_ITC_ID,MUS_ROLES_ROL_ID=$MUS_ROLES_ROL_ID WHERE RIC_ID=$RIC_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMus_rolinfcom($RIC_ID)
 {
  $sql="DELETE FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMus_rolinfcom($RIC_ID)
 {
  $sql="SELECT * FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMus_rolinfcom()
 {
  $sql="SELECT * FROM mus_rolinfcom";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mus_rolinfcom
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mus_rolinfcom WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna RIC_ID de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return array
	*/
 function getRIC_ID($RIC_ID)
 {
  $sql="SELECT RIC_ID FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna MUS_INTERFCOMAN_ITC_ID de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return array
	*/
 function getMUS_INTERFCOMAN_ITC_ID($RIC_ID)
 {
  $sql="SELECT MUS_INTERFCOMAN_ITC_ID FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna MUS_ROLES_ROL_ID de la tabla: mus_rolinfcom
	* @author SpyroFrameWork
	* @return array
	*/
 function getMUS_ROLES_ROL_ID($RIC_ID)
 {
  $sql="SELECT MUS_ROLES_ROL_ID FROM mus_rolinfcom WHERE RIC_ID=$RIC_ID";
  return $this->connection->GetAll($sql);
}


}?>
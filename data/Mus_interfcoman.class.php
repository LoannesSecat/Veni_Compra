<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mus_interfcoman
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mus_interfcoman
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
	function Mus_interfcoman()
	{
		$this->connection = Application::getDatabaseConnection();
		$this->connection->SetFetchMode(2);
	}

	
		/**
	* Metodo para Inciar la Transaccion en la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return int
	*/  
	function begin()
	{
		$this->connection=BeginTrans();
	}

	/**
	* Metodo para guardar la transaccion en la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return int
	*/  
	function commit()
	{
		$this->connection=CommitTrans();
	}

	/**
	* Metodo para abortar la transaccion en la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return int
	*/  
	function rollback($result)
	{
		$this->connection=RollbackTrans();
	} 

	/**
	* Metodo para validar si un registro existe en la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return int
	*/
	function existMus_interfcoman($ITC_ID)
	{
		$sql = "SELECT * FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		$this->consult = $this->connection->Execute($sql);
		if ($this->consult->fields)
			return 1;
	}


	/**
	* Metodo para consultar el Id max de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return int
	*/
	function maxId()
	{
		$sql = "SELECT max(ITC_ID) as id FROM mus_interfcoman ";
		$this->consult = $this->connection->Execute($sql);
		$max=$this->consult->fields;
		return $max['id']+1;

	}

	
 	/**
	* Metodo para adicionar un registro a la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return boolean
	*/
	function addMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID)
	{
		$sql="INSERT INTO mus_interfcoman VALUES($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID)";
		$this->consult = $this->connection->Execute($sql);
		return $this->consult;
	}
	
 	/**
	* Metodo para actualizar un registro de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return boolean
	*/
	function updateMus_interfcoman($ITC_ID,$MUS_COMANPER_COP_ID,$MUS_INTERPERM_INP_ID)
	{
		$sql="UPDATE mus_interfcoman SET MUS_COMANPER_COP_ID=$MUS_COMANPER_COP_ID,MUS_INTERPERM_INP_ID=$MUS_INTERPERM_INP_ID WHERE ITC_ID=$ITC_ID";
		$this->consult=$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
 	* Metodo para eliminar un registro de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return boolean
	*/
	function deleteMus_interfcoman($ITC_ID)
	{
		$sql="DELETE FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		$this->consult = @$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return array
	*/
	function getByIdMus_interfcoman($ITC_ID)
	{
		$sql="SELECT * FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		return $this->connection->GetAll($sql);
	}

	/**
	* Metodo para consultar todos los registros de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return array
	*/
	function getAllMus_interfcoman()
	{
		$sql="SELECT * FROM mus_interfcoman";
		return $this->connection->GetAll($sql); 
	}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mus_interfcoman
	* @author Spyro FrameWork
	* @return array
	*/ 
	function getAllBykeyword($keyword,$condiction,$field)
	{
		
		$sql="SELECT * FROM mus_interfcoman WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna ITC_ID de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return array
	*/
	function getITC_ID($ITC_ID)
	{
		$sql="SELECT ITC_ID FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna MUS_COMANPER_COP_ID de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return array
	*/
	function getMUS_COMANPER_COP_ID($ITC_ID)
	{
		$sql="SELECT MUS_COMANPER_COP_ID FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna MUS_INTERPERM_INP_ID de la tabla: mus_interfcoman
	* @author SpyroFrameWork
	* @return array
	*/
	function getMUS_INTERPERM_INP_ID($ITC_ID)
	{
		$sql="SELECT MUS_INTERPERM_INP_ID FROM mus_interfcoman WHERE ITC_ID=$ITC_ID";
		return $this->connection->GetAll($sql);
	}


}?>
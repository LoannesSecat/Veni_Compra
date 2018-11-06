<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mus_comanper
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mus_comanper
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
	function Mus_comanper()
	{
		$this->connection = Application::getDatabaseConnection();
		$this->connection->SetFetchMode(2);
	}

	
		/**
	* Metodo para Inciar la Transaccion en la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return int
	*/  
	function begin()
	{
		$this->connection=BeginTrans();
	}

	/**
	* Metodo para guardar la transaccion en la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return int
	*/  
	function commit()
	{
		$this->connection=CommitTrans();
	}

	/**
	* Metodo para abortar la transaccion en la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return int
	*/  
	function rollback($result)
	{
		$this->connection=RollbackTrans();
	} 

	/**
	* Metodo para validar si un registro existe en la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return int
	*/
	function existMus_comanper($COP_ID)
	{
		$sql = "SELECT * FROM mus_comanper WHERE COP_ID=$COP_ID";
		$this->consult = $this->connection->Execute($sql);
		if ($this->consult->fields)
			return 1;
	}


	/**
	* Metodo para consultar el Id max de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return int
	*/
	function maxId()
	{
		$sql = "SELECT max(COP_ID) as id FROM mus_comanper ";
		$this->consult = $this->connection->Execute($sql);
		$max=$this->consult->fields;
		return $max['id']+1;

	}

	
 	/**
	* Metodo para adicionar un registro a la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return boolean
	*/
	function addMus_comanper($COP_ID,$COP_NOMBRE)
	{
		$sql="INSERT INTO mus_comanper VALUES($COP_ID,'$COP_NOMBRE')";
		$this->consult = $this->connection->Execute($sql);
		return $this->consult;
	}
	
 	/**
	* Metodo para actualizar un registro de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return boolean
	*/
	function updateMus_comanper($COP_ID,$COP_NOMBRE)
	{
		$sql="UPDATE mus_comanper SET COP_NOMBRE='$COP_NOMBRE' WHERE COP_ID=$COP_ID";
		$this->consult=$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
 	* Metodo para eliminar un registro de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return boolean
	*/
	function deleteMus_comanper($COP_ID)
	{
		$sql="DELETE FROM mus_comanper WHERE COP_ID=$COP_ID";
		$this->consult = @$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return array
	*/
	function getByIdMus_comanper($COP_ID)
	{
		$sql="SELECT * FROM mus_comanper WHERE COP_ID=$COP_ID";
		return $this->connection->GetAll($sql);
	}

	/**
	* Metodo para consultar todos los registros de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return array
	*/
	function getAllMus_comanper()
	{
		$sql="SELECT * FROM mus_comanper";
		return $this->connection->GetAll($sql); 
	}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mus_comanper
	* @author Spyro FrameWork
	* @return array
	*/ 
	function getAllBykeyword($keyword,$condiction,$field)
	{
		
		$sql="SELECT * FROM mus_comanper WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_ID de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return array
	*/
	function getCOP_ID($COP_ID)
	{
		$sql="SELECT COP_ID FROM mus_comanper WHERE COP_ID=$COP_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_NOMBRE de la tabla: mus_comanper
	* @author SpyroFrameWork
	* @return array
	*/
	function getCOP_NOMBRE($COP_ID)
	{
		$sql="SELECT COP_NOMBRE FROM mus_comanper WHERE COP_ID=$COP_ID";
		return $this->connection->GetAll($sql);
	}


}?>
<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mga_garantias
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mga_garantias
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
	function Mga_garantias()
	{
		$this->connection = Application::getDatabaseConnection();
		$this->connection->SetFetchMode(2);
	}

	
		/**
	* Metodo para Inciar la Transaccion en la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return int
	*/  
	function begin()
	{
		$this->connection=BeginTrans();
	}

	/**
	* Metodo para guardar la transaccion en la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return int
	*/  
	function commit()
	{
		$this->connection=CommitTrans();
	}

	/**
	* Metodo para abortar la transaccion en la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return int
	*/  
	function rollback($result)
	{
		$this->connection=RollbackTrans();
	} 

	/**
	* Metodo para validar si un registro existe en la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return int
	*/
	function existMga_garantias($GAR_ID)
	{
		$sql = "SELECT * FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		$this->consult = $this->connection->Execute($sql);
		if ($this->consult->fields)
			return 1;
	}


	/**
	* Metodo para consultar el Id max de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return int
	*/
	function maxId()
	{
		$sql = "SELECT max(GAR_ID) as id FROM mga_garantias ";
		$this->consult = $this->connection->Execute($sql);
		$max=$this->consult->fields;
		return $max['id']+1;

	}

	
 	/**
	* Metodo para adicionar un registro a la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return boolean
	*/
	function addMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID)
	{
		$sql="INSERT INTO mga_garantias VALUES($GAR_ID,'$GAR_DESCRIPDEVO',$GAR_CANTIDAD,$GAR_FOTOESTADO,'$GAR_FECHASOLICI',$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID)";
		$this->consult = $this->connection->Execute($sql);
		return $this->consult;
	}
	
 	/**
	* Metodo para actualizar un registro de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return boolean
	*/
	function updateMga_garantias($GAR_ID,$GAR_DESCRIPDEVO,$GAR_CANTIDAD,$GAR_FOTOESTADO,$GAR_FECHASOLICI,$SUB_ESTADO,$SUB_RESPUESTA,$PDU_ID,$FAC_ID)
	{
		$sql="UPDATE mga_garantias SET GAR_DESCRIPDEVO='$GAR_DESCRIPDEVO',GAR_CANTIDAD=$GAR_CANTIDAD,GAR_FECHASOLICI='$GAR_FECHASOLICI',SUB_ESTADO=$SUB_ESTADO,SUB_RESPUESTA=$SUB_RESPUESTA,PDU_ID=$PDU_ID,FAC_ID=$FAC_ID WHERE GAR_ID=$GAR_ID";
		$this->consult=$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
 	* Metodo para eliminar un registro de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return boolean
	*/
	function deleteMga_garantias($GAR_ID)
	{
		$sql="DELETE FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		$this->consult = @$this->connection->Execute($sql);
		return $this->consult;
	}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getByIdMga_garantias($GAR_ID)
	{
		$sql="SELECT * FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}

	/**
	* Metodo para consultar todos los registros de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getAllMga_garantias()
	{
		$sql="SELECT * FROM mga_garantias";
		return $this->connection->GetAll($sql); 
	}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mga_garantias
	* @author Spyro FrameWork
	* @return array
	*/ 
	function getAllBykeyword($keyword,$condiction,$field)
	{
		
		$sql="SELECT * FROM mga_garantias WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna GAR_ID de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getGAR_ID($GAR_ID)
	{
		$sql="SELECT GAR_ID FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna GAR_DESCRIPDEVO de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getGAR_DESCRIPDEVO($GAR_ID)
	{
		$sql="SELECT GAR_DESCRIPDEVO FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna GAR_CANTIDAD de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getGAR_CANTIDAD($GAR_ID)
	{
		$sql="SELECT GAR_CANTIDAD FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna GAR_FOTOESTADO de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getGAR_FOTOESTADO($GAR_ID)
	{
		$sql="SELECT GAR_FOTOESTADO FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna GAR_FECHASOLICI de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getGAR_FECHASOLICI($GAR_ID)
	{
		$sql="SELECT GAR_FECHASOLICI FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_ESTADO de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getSUB_ESTADO($GAR_ID)
	{
		$sql="SELECT SUB_ESTADO FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_RESPUESTA de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getSUB_RESPUESTA($GAR_ID)
	{
		$sql="SELECT SUB_RESPUESTA FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getPDU_ID($GAR_ID)
	{
		$sql="SELECT PDU_ID FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FAC_ID de la tabla: mga_garantias
	* @author SpyroFrameWork
	* @return array
	*/
	function getFAC_ID($GAR_ID)
	{
		$sql="SELECT FAC_ID FROM mga_garantias WHERE GAR_ID=$GAR_ID";
		return $this->connection->GetAll($sql);
	}


}?>
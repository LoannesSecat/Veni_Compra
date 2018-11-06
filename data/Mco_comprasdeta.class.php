<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_comprasdeta
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mco_comprasdeta
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
 function Mco_comprasdeta()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }

 
		/**
	* Metodo para Inciar la Transaccion en la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return int
	*/
 function existMco_comprasdeta($CDE_ID)
 {
   $sql = "SELECT * FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(CDE_ID) as id FROM mco_comprasdeta ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }

 
 	/**
	* Metodo para adicionar un registro a la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID)
 {
   $sql="INSERT INTO mco_comprasdeta VALUES($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }
 
 	/**
	* Metodo para actualizar un registro de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMco_comprasdeta($CDE_ID,$CDE_CANTIDAD,$CDE_PRECIOCOMPR,$COP_ID,$PDU_ID)
 {
  $sql="UPDATE mco_comprasdeta SET CDE_CANTIDAD=$CDE_CANTIDAD,CDE_PRECIOCOMPR=$CDE_PRECIOCOMPR,COP_ID=$COP_ID,PDU_ID=$PDU_ID WHERE CDE_ID=$CDE_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMco_comprasdeta($CDE_ID)
 {
  $sql="DELETE FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMco_comprasdeta($CDE_ID)
 {
  $sql="SELECT * FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMco_comprasdeta()
 {
  $sql="SELECT * FROM mco_comprasdeta";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_comprasdeta
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {
  
  $sql="SELECT * FROM mco_comprasdeta WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna CDE_ID de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getCDE_ID($CDE_ID)
 {
  $sql="SELECT CDE_ID FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna CDE_CANTIDAD de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getCDE_CANTIDAD($CDE_ID)
 {
  $sql="SELECT CDE_CANTIDAD FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna CDE_PRECIOCOMPR de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getCDE_PRECIOCOMPR($CDE_ID)
 {
  $sql="SELECT CDE_PRECIOCOMPR FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_ID de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getCOP_ID($CDE_ID)
 {
  $sql="SELECT COP_ID FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: mco_comprasdeta
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_ID($CDE_ID)
 {
  $sql="SELECT PDU_ID FROM mco_comprasdeta WHERE CDE_ID=$CDE_ID";
  return $this->connection->GetAll($sql);
}


}?>
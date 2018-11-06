<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_producpromo
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mco_producpromo
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
 function Mco_producpromo()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }

 
		/**
	* Metodo para Inciar la Transaccion en la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return int
	*/
 function existMco_producpromo($PPM_ID)
 {
   $sql = "SELECT * FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(PPM_ID) as id FROM mco_producpromo ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }

 
 	/**
	* Metodo para adicionar un registro a la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM)
 {
   $sql="INSERT INTO mco_producpromo VALUES($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }
 
 	/**
	* Metodo para actualizar un registro de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMco_producpromo($PPM_ID,$PDU_ID,$PPM_FECHAINI,$PPM_FECHAFIN,$PPM_PRECIOPROM)
 {
  $sql="UPDATE mco_producpromo SET PDU_ID=$PDU_ID,PPM_FECHAINI=$PPM_FECHAINI,PPM_FECHAFIN=$PPM_FECHAFIN,PPM_PRECIOPROM=$PPM_PRECIOPROM WHERE PPM_ID=$PPM_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMco_producpromo($PPM_ID)
 {
  $sql="DELETE FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMco_producpromo($PPM_ID)
 {
  $sql="SELECT * FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMco_producpromo()
 {
  $sql="SELECT * FROM mco_producpromo";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_producpromo
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {
  
  $sql="SELECT * FROM mco_producpromo WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PPM_ID de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getPPM_ID($PPM_ID)
 {
  $sql="SELECT PPM_ID FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PDU_ID de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getPDU_ID($PPM_ID)
 {
  $sql="SELECT PDU_ID FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PPM_FECHAINI de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getPPM_FECHAINI($PPM_ID)
 {
  $sql="SELECT PPM_FECHAINI FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PPM_FECHAFIN de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getPPM_FECHAFIN($PPM_ID)
 {
  $sql="SELECT PPM_FECHAFIN FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PPM_PRECIOPROM de la tabla: mco_producpromo
	* @author SpyroFrameWork
	* @return array
	*/
 function getPPM_PRECIOPROM($PPM_ID)
 {
  $sql="SELECT PPM_PRECIOPROM FROM mco_producpromo WHERE PPM_ID=$PPM_ID";
  return $this->connection->GetAll($sql);
}


}?>
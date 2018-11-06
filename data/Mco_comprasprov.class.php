<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mco_comprasprov
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mco_comprasprov
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
 function Mco_comprasprov()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return int
	*/
 function existMco_comprasprov($COP_ID)
 {
   $sql = "SELECT * FROM mco_comprasprov WHERE COP_ID=$COP_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(COP_ID) as id FROM mco_comprasprov ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID)
 {
   $sql="INSERT INTO mco_comprasprov VALUES($COP_ID,'$COP_FECHACOMPRA',$COP_TOTALCOMPRA,$USU_ID,$PVE_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMco_comprasprov($COP_ID,$COP_FECHACOMPRA,$COP_TOTALCOMPRA,$USU_ID,$PVE_ID)
 {
  $sql="UPDATE mco_comprasprov SET COP_FECHACOMPRA='$COP_FECHACOMPRA',COP_TOTALCOMPRA=$COP_TOTALCOMPRA,USU_ID=$USU_ID,PVE_ID=$PVE_ID WHERE COP_ID=$COP_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMco_comprasprov($COP_ID)
 {
  $sql="DELETE FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMco_comprasprov($COP_ID)
 {
  $sql="SELECT * FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMco_comprasprov()
 {
  $sql="SELECT * FROM mco_comprasprov";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mco_comprasprov
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mco_comprasprov WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_ID de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getCOP_ID($COP_ID)
 {
  $sql="SELECT COP_ID FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_FECHACOMPRA de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getCOP_FECHACOMPRA($COP_ID)
 {
  $sql="SELECT COP_FECHACOMPRA FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna COP_TOTALCOMPRA de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getCOP_TOTALCOMPRA($COP_ID)
 {
  $sql="SELECT COP_TOTALCOMPRA FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_ID de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_ID($COP_ID)
 {
  $sql="SELECT USU_ID FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna PVE_ID de la tabla: mco_comprasprov
	* @author SpyroFrameWork
	* @return array
	*/
 function getPVE_ID($COP_ID)
 {
  $sql="SELECT PVE_ID FROM mco_comprasprov WHERE COP_ID=$COP_ID";
  return $this->connection->GetAll($sql);
}


}?>
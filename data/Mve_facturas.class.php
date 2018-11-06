<?php
/**
 * @package vc2
 * @subpackage Data
 */

/**
 * Clase que contiene las compuertas basica de la tabla: mve_facturas
 * @author SpyroFrameWork
 * @copyright Spyro Solutions 2005
 */
class Mve_facturas
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
 function Mve_facturas()
 {
   $this->connection = Application::getDatabaseConnection();
   $this->connection->SetFetchMode(2);
 }


		/**
	* Metodo para Inciar la Transaccion en la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return int
	*/  
 function begin()
 {
  $this->connection=BeginTrans();
}

	/**
	* Metodo para guardar la transaccion en la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return int
	*/  
 function commit()
 {
  $this->connection=CommitTrans();
}

	/**
	* Metodo para abortar la transaccion en la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return int
	*/  
 function rollback($result)
 {
  $this->connection=RollbackTrans();
} 

	/**
	* Metodo para validar si un registro existe en la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return int
	*/
 function existMve_facturas($FAC_ID)
 {
   $sql = "SELECT * FROM mve_facturas WHERE FAC_ID=$FAC_ID";
   $this->consult = $this->connection->Execute($sql);
   if ($this->consult->fields)
    return 1;
}


	/**
	* Metodo para consultar el Id max de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return int
	*/
 function maxId()
 {
   $sql = "SELECT max(FAC_ID) as id FROM mve_facturas ";
   $this->consult = $this->connection->Execute($sql);
   $max=$this->consult->fields;
   return $max['id']+1;

 }


 	/**
	* Metodo para adicionar un registro a la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return boolean
	*/
 function addMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID)
 {
   $sql="INSERT INTO mve_facturas VALUES($FAC_ID,'$FAC_FECHACOMPRA',$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID)";
   $this->consult = $this->connection->Execute($sql);
   return $this->consult;
 }

 	/**
	* Metodo para actualizar un registro de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return boolean
	*/
 function updateMve_facturas($FAC_ID,$FAC_FECHACOMPRA,$FAC_TOTAL,$SUB_TIPOPAGO,$USU_ID)
 {
  $sql="UPDATE mve_facturas SET FAC_FECHACOMPRA='$FAC_FECHACOMPRA',FAC_TOTAL=$FAC_TOTAL,SUB_TIPOPAGO=$SUB_TIPOPAGO,USU_ID=$USU_ID WHERE FAC_ID=$FAC_ID";
  $this->consult=$this->connection->Execute($sql);
  return $this->consult;
}

	/**
 	* Metodo para eliminar un registro de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return boolean
	*/
 function deleteMve_facturas($FAC_ID)
 {
  $sql="DELETE FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  $this->consult = @$this->connection->Execute($sql);
  return $this->consult;
}

	/**
	* Metodo para consultar por campo(s) clave(s) y obtener un registro de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getByIdMve_facturas($FAC_ID)
 {
  $sql="SELECT * FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}

	/**
	* Metodo para consultar todos los registros de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getAllMve_facturas()
 {
  $sql="SELECT * FROM mve_facturas";
  return $this->connection->GetAll($sql); 
}
	/**
	* Metodo para consultar todos los registros que coincidan con la condicion y la palabra calve de la tabla mve_facturas
	* @author Spyro FrameWork
	* @return array
	*/ 
 function getAllBykeyword($keyword,$condiction,$field)
 {

  $sql="SELECT * FROM mve_facturas WHERE ";

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
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FAC_ID de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getFAC_ID($FAC_ID)
 {
  $sql="SELECT FAC_ID FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FAC_FECHACOMPRA de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getFAC_FECHACOMPRA($FAC_ID)
 {
  $sql="SELECT FAC_FECHACOMPRA FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna FAC_TOTAL de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getFAC_TOTAL($FAC_ID)
 {
  $sql="SELECT FAC_TOTAL FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna SUB_TIPOPAGO de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getSUB_TIPOPAGO($FAC_ID)
 {
  $sql="SELECT SUB_TIPOPAGO FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}


	/**
	* Metodo para consultar por el(los) campo(s) llave(s) y obtener la columna USU_ID de la tabla: mve_facturas
	* @author SpyroFrameWork
	* @return array
	*/
 function getUSU_ID($FAC_ID)
 {
  $sql="SELECT USU_ID FROM mve_facturas WHERE FAC_ID=$FAC_ID";
  return $this->connection->GetAll($sql);
}


}?>